<?php


namespace App\Filament\Widgets;

use App\Models\MetodoPago;
use Filament\Widgets\Widget;

class MetodosPagoWidget extends Widget
{
    protected static string $view = 'filament.widgets.metodos-pago-widget';

    public function getMetodosPagoData()
    {
        return [
            'total' => MetodoPago::count(),
        ];
    }
}
