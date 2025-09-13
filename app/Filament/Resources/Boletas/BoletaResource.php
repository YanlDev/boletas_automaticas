<?php

namespace App\Filament\Resources\Boletas;

use App\Filament\Resources\Boletas\Pages\CreateBoleta;
use App\Filament\Resources\Boletas\Pages\EditBoleta;
use App\Filament\Resources\Boletas\Pages\ListBoletas;
use App\Filament\Resources\Boletas\Pages\ViewBoleta;
use App\Filament\Resources\Boletas\Schemas\BoletaForm;
use App\Filament\Resources\Boletas\Schemas\BoletaInfolist;
use App\Filament\Resources\Boletas\Tables\BoletasTable;
use App\Models\Boleta;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BoletaResource extends Resource
{
    protected static ?string $model = Boleta::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'numero_completo';

    public static function form(Schema $schema): Schema
    {
        return BoletaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schemag
    {
        return BoletaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BoletasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBoletas::route('/'),
            'create' => CreateBoleta::route('/create'),
            'view' => ViewBoleta::route('/{record}'),
            'edit' => EditBoleta::route('/{record}/edit'),
        ];
    }
}
