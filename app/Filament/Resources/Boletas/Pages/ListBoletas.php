<?php

namespace App\Filament\Resources\Boletas\Pages;

use App\Filament\Resources\Boletas\BoletaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBoletas extends ListRecords
{
    protected static string $resource = BoletaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
