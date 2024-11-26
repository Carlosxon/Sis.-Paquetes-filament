<?php

namespace App\Filament\Repartidor\Resources;

use App\Filament\Repartidor\Resources\ActualizarEstadosResource\Pages;
use App\Filament\Repartidor\Resources\ActualizarEstadosResource\RelationManagers;
use App\Models\ActualizarEstados;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActualizarEstadosResource extends Resource
{
    protected static ?string $model = ActualizarEstados::class;

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
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListActualizarEstados::route('/'),
            'create' => Pages\CreateActualizarEstados::route('/create'),
            'edit' => Pages\EditActualizarEstados::route('/{record}/edit'),
        ];
    }
}
