<?php


namespace App\Filament\Widgets;

use App\Models\Camion;
use Filament\Widgets\Widget;

class CamionesWidget extends Widget
{
    protected static string $view = 'filament.widgets.camiones-widget';

    public function getCamionesData()
    {
        return [
            'total' => Camion::count(),
           /* 'disponibles' => Camion::where('disponible', true)->count(),
            'no_disponibles' => Camion::where('disponible', false)->count(),*/
        ];
    }
}