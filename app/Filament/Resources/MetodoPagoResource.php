<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetodoPagoResource\Pages;
use App\Filament\Resources\MetodoPagoResource\RelationManagers;
use App\Models\MetodoPago;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetodoPagoResource extends Resource
{
    protected static ?string $model = MetodoPago::class;
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $slug = 'metodos-pago'; // Añadir esta línea
    protected static bool $shouldRegisterNavigation = false; // Cambiar a true
    
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nombre')
                ->required()
                ->label('Nombre del Método de Pago'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')->label('Nombre del Método de Pago'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMetodoPagos::route('/'),
            'create' => Pages\CreateMetodoPago::route('/create'),
            'edit' => Pages\EditMetodoPago::route('/{record}/edit'),
        ];
    }
}
