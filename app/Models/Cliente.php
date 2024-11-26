<?php

// app/Models/Cliente.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];

    public function envios()
    {
        return $this->hasMany(Envio::class);
    }

    // En el modelo User o Cliente
   public function shipments()
   {
    return $this->hasMany(Shipment::class, 'user_id'); // Asegúrate de que 'user_id' sea la clave foránea correcta
   }
}

