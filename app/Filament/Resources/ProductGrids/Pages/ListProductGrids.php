<?php

namespace App\Filament\Resources\ProductGrids\Pages;

use App\Filament\Resources\ProductGrids\ProductGridResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProductGrids extends ListRecords
{
    protected static string $resource = ProductGridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
