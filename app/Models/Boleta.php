<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boleta extends Model
{
    protected $fillable = [
        'serie',
        'correlativo',
        'fecha_emision',
        'monto_total',
        'estado_sunat',
        'xml_path',
        'cdr_path',
        'hash_cdr',
        'es_automatica',
        'observaciones',
    ];

    protected $casts = [
        'fecha_emision' => 'date',
        'monto_total' => 'decimal:2',
        'es_automatica' => 'boolean',
    ];

    public function notificaciones(): HasMany
    {
        return $this->hasMany(Notificacion::class);
    }

    public function getNumeroCompletoAttribute(): string
    {
        return $this->serie . '-' . $this->correlativo;
    }

    // Scope para boletas de este mes
    public function scopeThisMonth($query)
    {
        return $query->whereMonth('fecha_emision', now()->month)
            ->whereYear('fecha_emision', now()->year);
    }

    // Scope para boletas automáticas
    public function scopeAutomaticas($query)
    {
        return $query->where('es_automatica', true);
    }
}
