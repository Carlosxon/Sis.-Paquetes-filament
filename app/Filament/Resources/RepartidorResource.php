<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RepartidorResource\Pages;
use App\Filament\Resources\RepartidorResource\RelationManagers;
use App\Models\Repartidor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RepartidorResource extends Resource
{protected static ?string $model = Repartidor::class;
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static bool $shouldRegisterNavigation = false; // Ocultar en el panel

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->label('Nombre del Repartidor'),
                    Forms\Components\TextInput::make('telefono')
                    ->required()
                    ->label('Teléfono'),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->label('Correo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('nombre')->label('Nombre del Repartidor'),
            TextColumn::make('telefono')->label('Teléfono'),
            TextColumn::make('email')->label('Correo'),
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
            'index' => Pages\ListRepartidors::route('/'),
            'create' => Pages\CreateRepartidor::route('/create'),
            'edit' => Pages\EditRepartidor::route('/{record}/edit'),
        ];
    }
}
