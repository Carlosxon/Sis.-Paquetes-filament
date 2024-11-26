<?php

// app/Models/Paquete.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GeneratesQrCode;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_rastreo',
        'estado',
        'descripcion',
        'peso',
        'dimensiones',
    ];

    public function envios()
    {
        return $this->hasMany(Envio::class);
    }
}
