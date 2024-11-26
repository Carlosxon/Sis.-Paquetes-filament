<?php

namespace App\Filament\Resources\TipoEnvioResource\Pages;

use App\Filament\Resources\TipoEnvioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTipoEnvio extends EditRecord
{
    protected static string $resource = TipoEnvioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
