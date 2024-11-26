<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaqueteResource\Pages;
use App\Models\Paquete;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class PaqueteResource extends Resource
{
    
    protected static ?string $model = Paquete::class;
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static bool $shouldRegisterNavigation = false; // Ocultar en el panel

   

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->label('Descripción del Paquete'),
                Forms\Components\TextInput::make('peso')
                    ->required()
                    ->label('Peso del Paquete'),
                Forms\Components\TextInput::make('dimensiones')
                    ->label('Dimensiones del Paquete'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
        ->columns([
            TextColumn::make('descripcion')->label('Descripción del Paquete'),
            TextColumn::make('peso')->label('Peso'),
            TextColumn::make('dimensiones')->label('Dimensiones'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPaquetes::route('/'),
            'create' => Pages\CreatePaquete::route('/create'),
            'edit' => Pages\EditPaquete::route('/{record}/edit'),
        ];
    }
}
