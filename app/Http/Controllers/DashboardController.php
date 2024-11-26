<?php

namespace App\Http\Controllers;

use App\Filament\Widgets\EnviosWidget;
use App\Filament\Widgets\PaquetesWidget;
use App\Filament\Widgets\SucursalesWidget;
use App\Filament\Widgets\ClientesWidget;
use App\Filament\Widgets\RepartidoresWidget;
use App\Filament\Widgets\MetodosPagoWidget;
use App\Filament\Widgets\TiposEnvioWidget;
use App\Filament\Widgets\CamionesWidget;
use App\Filament\Widgets\FacturasWidget;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'widgets' => [
                EnviosWidget::class,
                PaquetesWidget::class,
                SucursalesWidget::class,
                ClientesWidget::class,
                RepartidoresWidget::class,
                MetodosPagoWidget::class,
                TiposEnvioWidget::class,
                CamionesWidget::class,
                FacturasWidget::class,
            ],
        ]);
    }
}
