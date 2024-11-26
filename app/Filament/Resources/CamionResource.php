<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CamionResource\Pages;
use App\Filament\Resources\CamionResource\RelationManagers;
use App\Models\Camion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CamionResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static bool $shouldRegisterNavigation = false; // Ocultar en el panel
    public static function form(Form $form): Form
    {
        return $form
        ->schema([

            Forms\Components\TextInput::make('modelo')
            ->required()
            ->label('Modelo del Camión'), 
            Forms\Components\TextInput::make('placa')
            ->required()
            ->label('Placa del Camión'), // Nuevo campo para placa
            Forms\Components\TextInput::make('descripcion')
                ->required()
                ->label('Descripción del Camión/Panel'),
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('modelo')->label('Modelo del Camión/Panel'),
            TextColumn::make('placa')->label('Placa del Camión'), // Nuevo campo para mostrar placa
            TextColumn::make('descripcion')->label('Descripción del Camión/Panel'),
            
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
            'index' => Pages\ListCamiones::route('/'),
            'create' => Pages\CreateCamion::route('/create'),
            'edit' => Pages\EditCamion::route('/{record}/edit'),
        ];
    }
}
