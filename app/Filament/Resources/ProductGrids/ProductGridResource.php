<?php

namespace App\Filament\Resources\ProductGrids;

use App\Filament\Resources\ProductGrids\Pages\CreateProductGrid;
use App\Filament\Resources\ProductGrids\Pages\EditProductGrid;
use App\Filament\Resources\ProductGrids\Pages\ListProductGrids;
use App\Filament\Resources\ProductGrids\Schemas\ProductGridForm;
use App\Filament\Resources\ProductGrids\Tables\ProductGridsTable;
use App\Models\ProductGrid;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductGridResource extends Resource
{
    protected static ?string $model = ProductGrid::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ProductGridForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductGridsTable::configure($table);
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
            'index' => ListProductGrids::route('/'),
            'create' => CreateProductGrid::route('/create'),
            'edit' => EditProductGrid::route('/{record}/edit'),
        ];
    }
}
