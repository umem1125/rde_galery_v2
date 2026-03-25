<?php

namespace App\Filament\Resources\ProductGrids\Pages;

use App\Filament\Resources\ProductGrids\ProductGridResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProductGrid extends CreateRecord
{
    protected static string $resource = ProductGridResource::class;
}
