<?php

namespace App\Filament\Resources\ProductGrids\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ProductGridForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->disk('public')
                    ->image(),
            ]);
    }
}
