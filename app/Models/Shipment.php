<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_number',
        'status',
        'user_id', // Asumiendo que cada envío está asociado con un usuario
        // Otros campos que puedas necesitar
    ];

    /**
     * Get the user that owns the shipment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Otros métodos y relaciones según sea necesario
}
