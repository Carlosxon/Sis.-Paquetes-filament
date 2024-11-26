<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MisPaquetesResource\Pages;
use App\Filament\Resources\MisPaquetesResource\RelationManagers;
use App\Models\MiPaquete;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MisPaquetesResource extends Resource
{
    protected static ?string $model = MiPaquete::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false; // Ocultar en el panel



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->label('Nombre del Paquete'),
                Forms\Components\Select::make('estado')
                    ->options([
                        'pendiente' => 'Pendiente',
                        'enviado' => 'Enviado',
                        'entregado' => 'Entregado',
                    ])
                    ->required()
                    ->label('Estado'),
                // Agrega más campos según sea necesario
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paquete.descripcion')->label('Paquete')->searchable(),
                Tables\Columns\TextColumn::make('sucursal.nombre')->label('Sucursal')->searchable(),
                // ... otras columnas ...
            ])
            ->query(fn (Builder $query) => $query->where('cliente_id', auth()->id())); // Filtra por el ID del cliente logueado
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
            'index' => Pages\ListMisPaquetes::route('/'),
            'create' => Pages\CreateMisPaquetes::route('/create'),
            'edit' => Pages\EditMisPaquetes::route('/{record}/edit'),
            'show' => Pages\ShowMisPaquetes::route('/{record}'), // Nueva ruta para mostrar detalles
        ];
    }

    public static function calcularCostoTotal($paqueteId)
    {
        $paquete = MiPaquete::find($paqueteId);
        $costoTotal = 0; // Inicializa la variable antes de usarla
        // Lógica para calcular el costo total
        return $costoTotal;
    }
}
