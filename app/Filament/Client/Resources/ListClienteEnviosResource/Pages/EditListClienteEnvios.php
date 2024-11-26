<?php

namespace App\Filament\Client\Resources\ListClienteEnviosResource\Pages;

use App\Filament\Client\Resources\ListClienteEnviosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListClienteEnvios extends EditRecord
{
    protected static string $resource = ListClienteEnviosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
