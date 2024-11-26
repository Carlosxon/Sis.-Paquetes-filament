<?php

namespace App\Filament\Resources;


use App\Filament\Resources\EnvioResource\Pages;
use App\Models\Envio;
use App\Models\Paquete;
use App\Models\Sucursal;
use App\Models\Cliente;
use App\Models\Repartidor;
use App\Models\MetodoPago;
use App\Models\TipoEnvio;
use App\Models\Camion;
use App\Models\Factura;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\FrameReflower\Text;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
//use Endroid\QrCode\QrCode;
use App\Traits\GeneratesQrCode;
use Filament\Resources\Pages\Page; 





class EnvioResource extends Resource
{
    protected static ?string $model = Envio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    //protected static bool $shouldRegisterNavigation = false; // Ocultar en el panel

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('paquete_id')
                ->relationship('paquete', 'descripcion')
                ->required()
                ->label('Paquete')
                ->createOptionForm([
                    Forms\Components\TextInput::make('descripcion')
                        ->required()
                        ->label('Descripción')
                ])
                ->createOptionUsing(function (array $data) {
                    return Paquete::create($data);
                }),

            Forms\Components\Select::make('sucursal_id')
                ->relationship('sucursal', 'nombre')
                ->required()
                ->label('Sucursal')
                ->createOptionForm([
                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->label('Nombre de la Sucursal')
                ])
                ->createOptionUsing(function (array $data) {
                    return Sucursal::create($data);
                }),

            Forms\Components\Select::make('cliente_id')
                ->relationship('cliente', 'nombre')
                ->required()
                ->label('Cliente')
                ->createOptionForm([
                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->label('Nombre del Cliente'),
                    Forms\Components\TextInput::make('direccion')
                        ->required()
                        ->label('Dirección del Cliente'),
                    Forms\Components\TextInput::make('telefono')
                        ->required()
                        ->label('Teléfono del Cliente'),
                    Forms\Components\TextInput::make('departamento')
                        ->required()
                        ->label('Departamento del Cliente'),
                ])
                ->createOptionUsing(function (array $data) {
                    return Cliente::create($data);
                }),

            Forms\Components\Select::make('repartidor_id')
                ->relationship('repartidor', 'nombre')
                ->label('Repartidor')
                ->createOptionForm([
                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->label('Nombre del Repartidor')
                ])
                ->createOptionUsing(function (array $data) {
                    return Repartidor::create($data);
                }),

            Forms\Components\Select::make('metodo_pago_id')
                ->relationship('metodoPago', 'nombre')
                ->required()
                ->label('Método de Pago')
                ->createOptionForm([
                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->label('Nombre del Método de Pago')
                ])
                ->createOptionUsing(function (array $data) {
                    return MetodoPago::create($data);
                }),

            Forms\Components\Select::make('tipo_envio_id')
                ->relationship('tipoEnvio', 'nombre')
                ->required()
                ->label('Tipo de Envío')
                ->createOptionForm([
                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->label('Nombre del Tipo de Envío')
                ])
                ->createOptionUsing(function (array $data) {
                    return TipoEnvio::create($data);
                }),

            Forms\Components\Select::make('camion_id')
                ->relationship('camion', 'modelo')
                ->label('Camión/Panel')
                ->createOptionForm([
                    Forms\Components\TextInput::make('placa')
                        ->required()
                        ->label('Descripción del Camión')
                ])
                ->createOptionUsing(function (array $data) {
                    return Camion::create($data);
                }),

            Forms\Components\DatePicker::make('fecha_envio')
                ->required()
                ->label('Fecha de Envío')
                ->default(now()), // Establece la fecha actual como predeterminada

            Forms\Components\TextInput::make('codigo_dhl')
                ->disabled()
                ->label('Código DHL'),

            Forms\Components\Select::make('estado')
                ->options([
                    'pendiente' => 'Pendiente de Recolectar',
                    'en_transito' => 'En Ruta',
                    'entregado' => 'Entregado',
                    'cancelado' => 'Cancelado',
                    'bodega' => 'Almacenado',
                    'recolectado' => 'Recolectado'
                ])
                ->required()
                ->label('Estado'),

            Forms\Components\TextInput::make('costo_total')
                ->required()
                ->label('Costo Total'),

            Forms\Components\TextInput::make('peso')
                ->required()
                ->label('Peso (libras)')
                ->numeric()
                ->minValue(1)
                ->step(0.5) // Permite incrementos de 0.5 libras
                ->reactive()
                ->afterStateUpdated(function ($state, callable $set) {
                    // Lógica para calcular el costo total
                    $costoPorLibra = 35; // Define el costo por libra
                    $costoTotal = $state * $costoPorLibra; // Calcula el costo total
                    $set('costo_total', $costoTotal); // Establece el costo total
                }),

           

            // Campos del remitente
            Forms\Components\TextInput::make('remitente_nombre')
                ->required()
                ->label('Nombre del Remitente'),

            Forms\Components\TextInput::make('remitente_nit') // Agregado NIT
                ->required()
                ->label('NIT del Remitente'),

            Forms\Components\TextInput::make('remitente_direccion')
                ->required()
                ->label('Dirección del Remitente'),

            Forms\Components\TextInput::make('remitente_telefono')
                ->required()
                ->label('Teléfono del Remitente'),

            Forms\Components\TextInput::make('remitente_departamento')
                ->required()
                ->label('Departamento del Remitente'),

            Forms\Components\TextInput::make('destinatario_nombre')
                ->required()
                ->label('Nombre del Destinatario'),

            Forms\Components\TextInput::make('destinatario_nit') 
                ->required()
                ->label('NIT del Destinatario'),

            Forms\Components\TextInput::make('destinatario_direccion')
                ->required()
                ->label('Dirección del Destinatario'),

            Forms\Components\TextInput::make('destinatario_telefono')
                ->required()
                ->label('Teléfono del Destinatario'),

            Forms\Components\TextInput::make('destinatario_departamento')
                ->required()
                ->label('Departamento del Destinatario'),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('paquete.descripcion')->label('Paquete')->searchable(),
            TextColumn::make('sucursal.nombre')->label('Sucursal')->searchable(),
            TextColumn::make('cliente.nombre')->label('Cliente')->searchable(),
            TextColumn::make('repartidor.nombre')->label('Repartidor')->searchable(),
            TextColumn::make('metodoPago.nombre')->label('Método de Pago')->searchable(),
            TextColumn::make('tipoEnvio.nombre')->label('Tipo de Envío')->searchable(),
            TextColumn::make('camion.modelo')->label('Camión/Panel')->searchable(),
            TextColumn::make('camion.placa')->label('Camión/Placa')->searchable(),
            TextColumn::make('fecha_envio')->label('Fecha de Envío')->date('d/m/Y')->sortable()->searchable(),
            TextColumn::make('estado')->label('Estado')->searchable(),
            TextColumn::make('codigo_dhl')->label('Codigo de Rastreo')->searchable(),
            TextColumn::make('costo_total')->label('Costo Total')->searchable(),
            TextColumn::make('remitente_nit')->label('NIT del Remitente')->searchable(),
            TextColumn::make('destinatario_nit')->label('NIT del Destinatario')->searchable(), 
        ])




        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\Action::make('Imprimir Guía')
                ->url(fn ($record) => route('envios.guia', $record->id)) // Redirige a la ruta
                ->color('primary'),
            Tables\Actions\Action::make('Crear Factura') // Nuevo botón
                ->action('printGuide') // Llama al método printGuide
                ->color('success'),
                Tables\Actions\Action::make('Volver a Envíos')
                ->url(route('envios.index')) // Asegúrate de que esta ruta esté definida
               ->color('secondary'),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ])
        ->headerActions([
            Tables\Actions\Action::make('ver_paquetes')
                ->label('Ver Paquetes')
                ->url('/admin/paquetes')
                ->color('success'),
            Tables\Actions\Action::make('ver_sucursales')
                ->label('Ver Sucursales')
                ->url('/admin/sucursals')
                ->color('success'),
            Tables\Actions\Action::make('ver_clientes')
                ->label('Ver Clientes')
                ->url('/admin/clientes')
                ->color('success'),
            Tables\Actions\Action::make('ver_repartidores')
                ->label('Ver Repartidores')
                ->url('/admin/repartidors')
                ->color('success'),
            Tables\Actions\Action::make('ver_metodos_pago')
                ->label('Ver Métodos de Pago')
                ->url('/admin/metodos-pago')
                ->color('success'),
            Tables\Actions\Action::make('ver_tipos_envio')
                ->label('Ver Tipos de Envío')
                ->url('/admin/tipos-envio')
                ->color('success'),
            Tables\Actions\Action::make('ver_camiones')
                ->label('Ver Camiones')
                ->url('/admin/camions')
                ->color('success'),
            Tables\Actions\Action::make('Imprimir Guía')
                ->action('printGuide') 
                ->color('primary'),
                
        ]);
    }
    


    public static function getRelations(): array
    {
        return [
            // Relaciones opcionales
        ];
    }

    
    public static function boot()
    {
        parent::boot();

        // Aplicar middleware a las páginas
        Page::middleware(['web', 'can:view-users']);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEnvios::route('/'),
            'create' => Pages\CreateEnvio::route('/create'),   
            'edit' => Pages\EditEnvio::route('/{record}/edit'), 
        ];
    }

   
    public static function printGuide($recordId)
    {
        $envio = Envio::find($recordId);
        
        if (!$envio) {
            session()->flash('error', 'Envío no encontrado.');
            return redirect()->back();
        }
    
        // Ruta donde se guardará el código QR
        $qrCodePath = public_path('qrcodes/' . $envio->codigo_dhl . '.png');

           // Generar y guardar el código QR
           QrCode::format('png')->size(300)->generate($envio->codigo_dhl, $qrCodePath); 
           dd('Código QR generado en: ' . $qrCodePath);
       
     
        // Crear la factura en la base de datos
       /* $factura = Factura::create([
            'numero_autorizacion' => 'TEST-' . strtoupper(uniqid()),
            'nombre_receptor' => $envio->destinatario_nombre,
            'nit_receptor' => '1234567-8',
            'total' => 200,
            'fecha_emision' => now(),
            'envio_id' => $envio->id,
        ]);
    
        // Verifica si la factura se creó correctamente
        if (!$factura) {
            session()->flash('error', 'No se pudo crear la factura.');
            return redirect()->back();
        }*/
    
        return view('pdf.guia', ['envio' => $envio, /*'factura' => $factura*/]);
    }
   


}







