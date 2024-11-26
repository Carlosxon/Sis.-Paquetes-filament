<?php

namespace App\Filament\Widgets;

use App\Models\Repartidor;
use Filament\Widgets\Widget;

class RepartidoresWidget extends Widget
{
    protected static string $view = 'filament.widgets.repartidores-widget';

    public function getRepartidoresData()
    {
         return [
            'total' => Repartidor::count(),
            /*'disponibles' => Repartidor::where('disponible', true)->count(),
            'no_disponibles' => Repartidor::where('disponible', false)->count(),*/
        ];
    }
}