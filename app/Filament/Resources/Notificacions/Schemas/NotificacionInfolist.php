<?php

namespace App\Filament\Resources\Notificacions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NotificacionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('boleta.id')
                    ->numeric(),
                TextEntry::make('tipo'),
                TextEntry::make('estado'),
                TextEntry::make('intentos')
                    ->numeric(),
                TextEntry::make('enviado_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
