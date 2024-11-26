<?php

namespace App\Filament\Repartidor\Resources\ActualizarEstadosResource\Pages;

use App\Filament\Repartidor\Resources\ActualizarEstadosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActualizarEstados extends EditRecord
{
    protected static string $resource = ActualizarEstadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
