<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Helpers\CurrencyNumber;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->required(),
                Toggle::make('is_active')
                    ->columnSpanFull()
                    ->required(),
                Fieldset::make()
                    ->schema([
                        TextInput::make('name')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required(),
                        TextInput::make('slug')
                            ->unique(ignoreRecord: true)
                            ->readOnly()
                            ->required(),
                    ])
                    ->columnSpanFull(),
                CurrencyNumber::rupiahInput('price', ('Price')),
                RichEditor::make('description')
                    ->dehydrateStateUsing(fn ($state) => strip_tags($state))
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->disk('public')
                    ->columnSpanFull()
                    ->image(),
                TextInput::make('stock')
                    ->numeric(),
            ]);
    }
}
