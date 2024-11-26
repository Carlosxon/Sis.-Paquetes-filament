<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Shipment; // Modelo para envíos
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;
use Spatie\Permission\Traits\ActivatesPermissions;
use Spatie\Permission\Traits\HasRoles;

class ClientController extends Controller
{
    use HasRoles;

   

    public function track(Request $request)
    {
        $shipment = Shipment::where('tracking_number', $request->input('tracking_number'))->first();

        return view('client.track-shipments', compact('shipment'));
    }

    public function profile()
    {
        return view('client.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        return redirect()->route('client.profile')->with('status', 'Perfil actualizado con éxito');
    }

    public function registrar(Request $request)
    {
        // Validar los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes',
            'contraseña' => 'required|string|min:8|confirmed',
            'direccion' => 'required|string|max:255', 
        ]);

        // Crear el cliente
        $cliente = new Cliente();
        $cliente->nombre = $validatedData['nombre'];
        $cliente->email = $validatedData['email'];
        $cliente->contraseña = Hash::make($validatedData['contraseña']);
        $cliente->direccion = $validatedData['direccion']; 
        $cliente->save();

         // Crear el usuario asociado
        $user = new User();
        $user->name = $validatedData['nombre'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['contraseña']);
        $user->cliente_id = $cliente->id; // Asigna el ID del cliente al usuario
        $user->save();

        // Asignar rol de cliente
        $user = User::where('email', $validatedData['email'])->first();
        $user->assignRole('cliente');

        // Iniciar sesión automáticamente
        Auth::login($user);

        // Redirigir a la página de administración
        return redirect('/client')->with('success', 'Registro exitoso. Bienvenido al panel de administración.');
    }

    /*public function panel()
    {
       

        
        return view('client.panel'); // Cambia 'admin.panel' a 'client.panel'
    }*/

    public function misEnvios()
    {
        $user = Auth::user();
        $envios = Shipment::where('cliente_id', $user->id)->get(); // Asegúrate de que 'cliente_id' sea el campo correcto

        return view('client.envios', compact('envios'));
    }


    




}
