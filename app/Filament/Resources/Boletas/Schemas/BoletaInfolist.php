<?php

namespace App\Filament\Resources\Boletas\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BoletaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('serie'),
                TextEntry::make('correlativo'),
                TextEntry::make('fecha_emision')
                    ->date(),
                TextEntry::make('monto_total')
                    ->numeric(),
                TextEntry::make('estado_sunat'),
                TextEntry::make('hash_cdr'),
                IconEntry::make('es_automatica')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
