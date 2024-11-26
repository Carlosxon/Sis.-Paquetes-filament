<?php

namespace App\Filament\Widgets;

use App\Models\Cliente;
use Filament\Widgets\Widget;

class ClientesWidget extends Widget
{
    protected static string $view = 'filament.widgets.clientes-widget';

    public function getClientesData()
    {
        return [
            'total' => Cliente::count(),
            /*'activos' => Cliente::where('activo', true)->count(),
            'inactivos' => Cliente::where('activo', false)->count(),*/
        ];
    }
}