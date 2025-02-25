<?php

// app/Models/TipoEnvio.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEnvio extends Model
{
    use HasFactory;
    
    protected $table = 'tipos_envios';

    protected $fillable = [
        'nombre',
    ];

    public function envios()
    {
        return $this->hasMany(Envio::class);
    }
}
