<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Envio;
use SimpleSoftwareIO\QrCode\Facades\QrCode; // Agregar esta línea para importar la clase QrCode

class RastreoController extends Controller
{
    // verifica el numero de seguimiento generado automaticamente similar a DHL

    public function buscar(Request $request)
    {
        $numeroSeguimiento = $request->input('numero_seguimiento');
        $envio = Envio::where('numero_seguimiento', $numeroSeguimiento)->first();

        if ($envio) {

            $qrCodePath = 'codigo_qr/' . $envio->codigo_dhl . '.png'; // Ajusta la ruta según tu estructura

            // Generar y guardar el código QR
            QrCode::generate($envio->codigo_dhl, public_path($qrCodePath));
            return view('rastreo_resultado', ['envio' => $envio]);
        } else {
            return view('rastreo_resultado', ['mensaje' => 'Número de seguimiento no encontrado']);
        }
    }
}
