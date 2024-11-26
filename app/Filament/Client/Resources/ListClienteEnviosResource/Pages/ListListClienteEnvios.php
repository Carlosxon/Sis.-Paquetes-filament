<?php

namespace App\Filament\Client\Resources\ListClienteEnviosResource\Pages;

use App\Filament\Client\Resources\ListClienteEnviosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListClienteEnvios extends ListRecords
{
    protected static string $resource = ListClienteEnviosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
