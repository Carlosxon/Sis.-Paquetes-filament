<?php


namespace App\Filament\Widgets;

use App\Models\TipoEnvio;
use Filament\Widgets\Widget;

class TiposEnvioWidget extends Widget
{
    protected static string $view = 'filament.widgets.tipos-envio-widget';

    public function getTiposEnvioData()
    {
        return [
            'total' => TipoEnvio::count(),
        ];
    }
}