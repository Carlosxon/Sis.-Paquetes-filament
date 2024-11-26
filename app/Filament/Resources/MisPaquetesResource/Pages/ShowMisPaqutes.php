<?php

namespace App\Filament\Resources\MisPaquetesResource\Pages;

use App\Filament\Resources\MisPaquetesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\View\View;

class ShowMisPaquetes extends ViewRecord
{
    protected static string $resource = MisPaquetesResource::class;

    public function getHeader(): ?View
    {
        return view('filament.mispaquetes.header', [
            'title' => 'Detalles de Mis Paquetes',
        ]);
    }

    public function getActions(): array
    {
        return [
            Actions\Action::make('edit')->url($this->getResource()::getUrl('edit', ['record' => $this->record->id])),
        ];
    }

    public function getTable(): array
    {
        if (!$this->record) {
            // Manejar el caso donde record es null
            return [
                'mensaje' => 'No tienes paquetes vinculados o disponibles.', // Mensaje a mostrar
            ];
        }

        return [
            'envios' => $this->record->envios ? $this->record->envios()->where('cliente_id', auth()->id())->get() : [],
        ];
    }
}
