<?php
namespace App\Filament\Widgets;

use App\Models\Sucursal;
use Filament\Widgets\Widget;

class SucursalesWidget extends Widget
{
    protected static string $view = 'filament.widgets.sucursales-widget';

    public function getSucursalesData()
    {
        return [
            'total' => Sucursal::count(),
            /*'activas' => Sucursal::where('activo', true)->count(),
            'inactivas' => Sucursal::where('activo', false)->count(),*/
        ];
    }
}