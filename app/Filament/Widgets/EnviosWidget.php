<?php

namespace App\Filament\Widgets;

use App\Models\Envio;
use Filament\Widgets\Widget;

class EnviosWidget extends Widget
{
    protected static string $view = 'filament.widgets.envios-widget';

    public function getEnviosData()
    {
        return [
            'total' => Envio::count(),
            'pendientes' => Envio::where('estado', 'pendiente')->count(),
            'en_transito' => Envio::where('estado', 'en_transito')->count(),
            'entregados' => Envio::where('estado', 'entregado')->count(),
            'cancelados' => Envio::where('estado', 'cancelado')->count(),
        ];
    }
}

