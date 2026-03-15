<?php

namespace App\Helpers;

use Filament\Forms\Components\TextInput;

class CurrencyNumber
{
    public static function rupiahInput(string $name, string $label): TextInput
    {
        return TextInput::make($name)
            ->label($label)
            ->prefix('Rp')
            ->extraInputAttributes([
                'x-data' => '',
                'x-on:input' => "
                    let val = \$event.target.value.replace(/[^0-9]/g, '');
                    if (val === '') { \$event.target.value = ''; return; }
                    \$event.target.value = new Intl.NumberFormat('id-ID').format(val);
                ",
                'x-on:blur' => "
                    let val = \$event.target.value.replace(/[^0-9]/g, '');
                    if (val === '') { \$event.target.value = ''; return; }
                    \$event.target.value = new Intl.NumberFormat('id-ID').format(val);
                ",
            ])
            ->formatStateUsing(fn ($state) => $state ? number_format((float) $state, 0, ',', '.') : '')
            ->dehydrateStateUsing(fn ($state) => $state ? (int) str_replace(['.', ',', ' '], '', $state) : null);
    }
}
