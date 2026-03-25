<?php

namespace App\Filament\Resources\Testimonies\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Textarea::make('title'),
                TextInput::make('name'),
                TextInput::make('city'),
            ]);
    }
}
