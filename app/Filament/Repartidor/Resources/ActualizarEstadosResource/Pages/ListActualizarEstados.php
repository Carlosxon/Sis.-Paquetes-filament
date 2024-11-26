<?php

namespace App\Filament\Repartidor\Resources\ActualizarEstadosResource\Pages;

use App\Filament\Repartidor\Resources\ActualizarEstadosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActualizarEstados extends ListRecords
{
    protected static string $resource = ActualizarEstadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
