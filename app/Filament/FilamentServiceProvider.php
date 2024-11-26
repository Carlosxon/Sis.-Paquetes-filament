<?php


namespace App\Providers;

use Filament\Facades\Filament;
use Filament\FilamentServiceProvider as ServiceProvider;
use App\Filament\Pages\TrackingPage;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();

        // Registrar las páginas personalizadas
        Filament::registerPages([
            TrackingPage::class,
        ]);
    }
}
