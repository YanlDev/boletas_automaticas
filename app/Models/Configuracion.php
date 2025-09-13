<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuraciones';

    protected $fillable = [
        'clave',
        'valor',
        'tipo',
        'descripcion',
    ];

    // Helper estático para obtener valores
    public static function get(string $clave, $default = null)
    {
        $config = static::where('clave', $clave)->first();

        if (!$config) {
            return $default;
        }

        return match($config->tipo) {
            'integer' => (int) $config->valor,
            'decimal' => (float) $config->valor,
            'boolean' => filter_var($config->valor, FILTER_VALIDATE_BOOLEAN),
            default => $config->valor,
        };
    }

    // Helper para establecer valores
    public static function set(string $clave, $valor, string $tipo = 'string', string $descripcion = null)
    {
        return static::updateOrCreate(
            ['clave' => $clave],
            [
                'valor' => $valor,
                'tipo' => $tipo,
                'descripcion' => $descripcion,
            ]
        );
    }
}
