<?php

use App\Filament\Resources\EnvioResource;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RastreoController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaqueteController;

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ClientController;



//Rastero de  paqute por DHL
use App\Http\Controllers\EnvioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('permissions', PermissionController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/client/track', [ClientController::class, 'track'])->name('client.track');
    Route::get('/client/profile', [ClientController::class, 'profile'])->name('client.profile');
    Route::put('/client/profile', [ClientController::class, 'updateProfile'])->name('client.updateProfile');
    //Route::post('/rastreo', [RastreoController::class, 'buscar'])->name('rastreo');
    Route::post('/process-payment', [PaymentController::class, 'processPayment']);
    
});

Route::middleware(['auth', 'can:view_envios'])->group(function () {
    
});

Route::middleware(['auth'])->group(function () {
    // Rutas protegidas
});
/*Route::middleware(['auth'])->group(function () {
    Route::get('client/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');
});*/

Route::get('/paquete/{numeroRastreo}/qr', [PaqueteController::class, 'mostrarQR'])->name('paquete.qr');

//Rastero de  paqute por DHL
Route::post('/rastreo', [EnvioController::class, 'rastreo'])->name('rastreo');
Route::post('/buscar-envio', [EnvioController::class, 'buscarEnvio'])->name('buscar.envio');

//visualizacion de la guia
Route::get('/envios/{id}/guia', [EnvioController::class, 'showGuide'])->name('envios.guia');





// Otras rutas...

Route::get('/envios', [EnvioController::class, 'index'])->name('envios.index');
//ruta de registro de cliente en welcome
Route::post('/registro', [ClientController::class, 'registrar'])->name('registro.cliente');
// panel cliente
Route::get('/mis-envios', [ClientController::class, 'misEnvios'])->name('mis.envios')->middleware('auth');



