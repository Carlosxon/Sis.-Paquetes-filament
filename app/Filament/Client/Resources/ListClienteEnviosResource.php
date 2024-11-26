<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\ListClienteEnviosResource\Pages;
use App\Filament\Client\Resources\ListClienteEnviosResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use App\Models\Envio;
use App\Models\User;
use App\Models\Paquete;
use App\Models\Sucursal;
use App\Models\Cliente;
use App\Models\Repartidor;
use App\Models\MetodoPago;
use App\Models\TipoEnvio;
use App\Models\Camion;
use App\Models\Estado;
use App\Models\CodigoDhl;
use App\Models\CostoTotal;
use App\Models\RemitenteNit;
use App\Models\DestinatarioNit;
use Filament\Tables\Columns\TextColumn;

class ListClienteEnviosResource extends Resource
{
   

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        $user = Auth::user(); // Obtener el usuario logueado

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
            ->query(Envio::where('cliente_id', $user->cliente->id)) // Filtrar envíos por cliente_id del usuario logueado
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('Imprimir Guía')
                    ->url(fn ($record) => route('envios.guia', $record->id))
                    ->color('primary'),
                Tables\Actions\Action::make('Imprimir Factura')
                    ->action('printGuide')
                    ->color('success'),
                
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListListClienteEnvios::route('/'),
            //'create' => Pages\CreateListClienteEnvios::route('/create'),
           // 'edit' => Pages\EditListClienteEnvios::route('/{record}/edit'),
        ];
    }
}
