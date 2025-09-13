<?php

namespace App\Filament\Resources\Boletas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BoletaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('serie')
                    ->required()
                    ->default('B001'),
                TextInput::make('correlativo')
                    ->required(),
                DatePicker::make('fecha_emision')
                    ->required(),
                TextInput::make('monto_total')
                    ->required()
                    ->numeric(),
                TextInput::make('estado_sunat'),
                Textarea::make('xml_path')
                    ->columnSpanFull(),
                Textarea::make('cdr_path')
                    ->columnSpanFull(),
                TextInput::make('hash_cdr'),
                Toggle::make('es_automatica')
                    ->required(),
                Textarea::make('observaciones')
                    ->columnSpanFull(),
            ]);
    }
}
