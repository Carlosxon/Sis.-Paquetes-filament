<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiPaquete extends Model
{
    use HasFactory;

    public function envios()
    {
        return $this->hasMany(Envio::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($miPaquete) {
            // Lógica que se ejecuta después de crear un paquete
            
        });
    }
}
