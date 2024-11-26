<?php
namespace App\Filament\Pages;

use Filament\Pages\Dashboard as Page;
use App\Filament\Widgets\TotalPedidos;
use App\Filament\Widgets\PedidosPorEstado;
use App\Filament\Widgets\PedidosRecientes;

class Dashboard extends Page
{
    public function getWidgets(): array
    {
        return [
            TotalPedidos::class,
            PedidosPorEstado::class,
            PedidosRecientes::class,
        ];
    }
}

