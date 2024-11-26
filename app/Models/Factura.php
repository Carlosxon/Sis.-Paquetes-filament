<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_autorizacion',
        'nombre_receptor',
        'nit_receptor',
        'total',
        'fecha_emision',
        'envio_id',
    ];
}