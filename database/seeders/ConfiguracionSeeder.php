<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    public function run(): void
    {
        $configuraciones = [
            [
                'clave' => 'monto_min',
                'valor' => '400',
                'tipo' => 'decimal',
                'descripcion' => 'Monto mínimo para boletas automáticas'
            ],
            [
                'clave' => 'monto_max',
                'valor' => '450',
                'tipo' => 'decimal',
                'descripcion' => 'Monto máximo para boletas automáticas'
            ],
            [
                'clave' => 'hora_emision',
                'valor' => '09:00',
                'tipo' => 'string',
                'descripcion' => 'Hora de emisión automática diaria'
            ],
            [
                'clave' => 'descripcion_servicio',
                'valor' => 'SERVICIO DE COMPUTACIÓN',
                'tipo' => 'string',
                'descripcion' => 'Descripción por defecto del servicio'
            ],
            [
                'clave' => 'codigo_producto',
                'valor' => 'SERV001',
                'tipo' => 'string',
                'descripcion' => 'Código por defecto del producto/servicio'
            ],
        ];

        foreach ($configuraciones as $config) {
            Configuracion::updateOrCreate(
                ['clave' => $config['clave']],
                $config
            );
        }
    }
}
