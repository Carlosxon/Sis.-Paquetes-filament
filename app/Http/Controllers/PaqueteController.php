<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    public function mostrarQR($numeroRastreo)
    {
        $paquete = Paquete::where('numero_rastreo', $numeroRastreo)->firstOrFail();
        $qrCode = $paquete->generateQrCode($numeroRastreo);
        
        return view('paquetes.qr', compact('paquete', 'qrCode'));
    }
}
