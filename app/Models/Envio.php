<?php

// app/Models/Envio.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Envio extends Model
{
    use HasFactory;

    protected $fillable = [
        'paquete_id',
        'sucursal_id',
        'cliente_id',
        'repartidor_id',
        'metodo_pago_id',
        'tipo_envio_id',
        'camion_id',
        'fecha_envio',
        'codigo_dhl',
        'estado',
        'costo_total',
        'peso',
        'remitente_nombre',
        'remitente_direccion',
        'remitente_telefono',
        'remitente_departamento',
        'destinatario_nombre', 
        'destinatario_direccion', 
        'destinatario_telefono', 
        'destinatario_departamento',
        'destinatario_nit',
        'remitente_nit',
    ];

    

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($envio) {
            $envio->codigo_dhl = Str::random(8); // Generar un código aleatorio de 8 caracteres
        });
    }

    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function repartidor()
    {
        return $this->belongsTo(Repartidor::class);
    }

    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class);
    }

    public function tipoEnvio()
    {
        return $this->belongsTo(TipoEnvio::class);
    }

    public function camion()
    {
        return $this->belongsTo(Camion::class);
    }

    public function miPaquete()
    {
        return $this->belongsTo(MiPaquete::class, 'paquetes_id'); // Asegúrate de que 'paquete_id' sea la clave foránea correcta
    }
}
