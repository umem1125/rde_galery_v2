<?php

namespace App\Filament\Resources\ProductGrids\Pages;

use App\Filament\Resources\ProductGrids\ProductGridResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProductGrid extends EditRecord
{
    protected static string $resource = ProductGridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
