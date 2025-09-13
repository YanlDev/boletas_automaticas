<?php

namespace App\Filament\Resources\Notificacions\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NotificacionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('boleta_id')
                    ->relationship('boleta', 'id'),
                TextInput::make('tipo')
                    ->required(),
                Textarea::make('mensaje')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('estado')
                    ->required()
                    ->default('pendiente'),
                Textarea::make('respuesta_api')
                    ->columnSpanFull(),
                TextInput::make('intentos')
                    ->required()
                    ->numeric()
                    ->default(0),
                DateTimePicker::make('enviado_at'),
            ]);
    }
}
