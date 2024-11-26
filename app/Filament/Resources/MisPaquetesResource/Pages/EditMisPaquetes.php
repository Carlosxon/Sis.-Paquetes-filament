<?php

namespace App\Filament\Resources\MisPaquetesResource\Pages;

use App\Filament\Resources\MisPaquetesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMisPaquetes extends EditRecord
{
    protected static string $resource = MisPaquetesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
