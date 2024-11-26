<?php

// app/Models/Repartidor.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    use HasFactory;
    protected $table = 'repartidores';

    protected $fillable = [
        'nombre',
        'telefono',
        'email',
    ];

    public function envios()
    {
        return $this->hasMany(Envio::class);
    }
}
