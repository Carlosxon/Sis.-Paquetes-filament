<?php

namespace App\Filament\Resources\TipoEnvioResource\Pages;

use App\Filament\Resources\TipoEnvioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipoEnvios extends ListRecords
{
    protected static string $resource = TipoEnvioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
