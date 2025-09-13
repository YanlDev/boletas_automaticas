<?php

namespace App\Filament\Resources\Boletas\Pages;

use App\Filament\Resources\Boletas\BoletaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBoleta extends EditRecord
{
    protected static string $resource = BoletaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
