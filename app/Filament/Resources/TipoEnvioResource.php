<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipoEnvioResource\Pages;
use App\Filament\Resources\TipoEnvioResource\RelationManagers;
use App\Models\TipoEnvio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TipoEnvioResource extends Resource
{
    protected static ?string $model = TipoEnvio::class;
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $slug = 'tipos-envio'; // Asegúrate de que esta línea esté presente
    protected static ?string $navigationLabel = 'Tipos de Envío';
    protected static bool $shouldRegisterNavigation = false; // Ocultar en el panel
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nombre')
                ->required()
                ->label('Nombre del Tipo de Envío'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')->label('Nombre del Tipo de Envío'),
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
            'index' => Pages\ListTipoEnvios::route('/'),
            'create' => Pages\CreateTipoEnvio::route('/create'),
            'edit' => Pages\EditTipoEnvio::route('/{record}/edit'),
        ];
    }
}
