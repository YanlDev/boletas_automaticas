<?php

namespace App\Filament\Resources\Configuracions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ConfiguracionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('clave')
                    ->required(),
                Textarea::make('valor')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('tipo')
                    ->required()
                    ->default('string'),
                Textarea::make('descripcion')
                    ->columnSpanFull(),
            ]);
    }
}
