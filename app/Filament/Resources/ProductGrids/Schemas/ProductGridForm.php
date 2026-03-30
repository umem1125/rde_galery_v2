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
                    ->image()
                    ->acceptedFileTypes(['image/png', 'image/webp', 'image/jpg', 'image/jpeg'])
                    ->maxSize(2048),
            ]);
    }
}
