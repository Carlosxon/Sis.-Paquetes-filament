<?php

// app/Models/MetodoPago.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;
    
    protected $table = 'metodos_pagos';

    protected $fillable = [
        'nombre',
    ];

    public function envios()
    {
        return $this->hasMany(Envio::class);
    }
}
