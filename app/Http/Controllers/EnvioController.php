<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;

class EnvioController extends Controller
{
    public function rastreo(Request $request)
    {
        $request->validate([
            'numero_seguimiento' => 'required|string',
        ]);

        // Buscar el envío por el código DHL
        $envio = Envio::where('codigo_dhl', $request->numero_seguimiento)->first();

        if (!$envio) {
            return redirect()->back()->with('error', 'Código de rastreo no encontrado.');
        }

        return view('rastreo', compact('envio'));
    }

    public function buscarEnvio(Request $request)
    {
        $request->validate([
            'numero_seguimiento' => 'required|string',
        ]);

        // Buscar el envío por el código DHL
        $envio = Envio::where('codigo_dhl', $request->numero_seguimiento)->first();

        if (!$envio) {
            return redirect()->back()->with('error', 'Código de rastreo no encontrado.');
        }

        return view('rastreo', compact('envio'));
    }

    public function showGuide($id)
    {
        $envio = Envio::find($id);
        
        if (!$envio) {
            return redirect()->back()->with('error', 'Envío no encontrado.');
        }

        return view('pdf.guia', compact('envio'));
    }
    

    
}



