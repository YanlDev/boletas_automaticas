<?php

namespace App\Filament\Resources\Boletas\Pages;

use App\Filament\Resources\Boletas\BoletaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBoleta extends ViewRecord
{
    protected static string $resource = BoletaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
