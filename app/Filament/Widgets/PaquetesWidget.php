<?php

namespace App\Filament\Widgets;

use App\Models\Paquete;
use Filament\Widgets\Widget;

class PaquetesWidget extends Widget
{
    protected static string $view = 'filament.widgets.paquetes-widget';

    public function getPaquetesData()
    {
        // Definir un umbral de peso para determinar la disponibilidad
        $pesoUmbral = 1; // Ajusta este valor según tus criterios

        return [
            'total' => Paquete::count(),
            'disponibles' => Paquete::where('peso', '<=', $pesoUmbral)->count(),
            'no_disponibles' => Paquete::where('peso', '>', $pesoUmbral)->count(),
        ];
    }
}
