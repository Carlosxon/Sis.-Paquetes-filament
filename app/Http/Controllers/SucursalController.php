<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    //




    public function index()
{
    $sucursales = Sucursal::all();
    return view('sucursales.index', compact('sucursales'));
}

public function create()
{
    return view('sucursales.create');
}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
    ]);

    Sucursal::create($request->all());
    return redirect()->route('sucursales.index')->with('success', 'Sucursal creada exitosamente.');
}

}
