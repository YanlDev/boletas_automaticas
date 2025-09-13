<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notificacion extends Model
{
    protected $table = 'notificaciones';

    protected $fillable = [
        'boleta_id',
        'tipo',
        'mensaje',
        'estado',
        'respuesta_api',
        'intentos',
        'enviado_at',
    ];

    protected $casts = [
        'enviado_at' => 'datetime',
    ];

    public function boleta(): BelongsTo
    {
        return $this->belongsTo(Boleta::class);
    }

    // Scopes
    public function scopePendientes($query)
    {
        return $query->where('estado', 'pendiente');
    }

    public function scopeFallidas($query)
    {
        return $query->where('estado', 'fallido');
    }
}
