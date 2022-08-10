<?php

namespace CodebarAg\LaravelDefault\Helpers;

class HelperNumber
{
    public function format(int|float|null $number, int $decimals = 2, string $decimalSeparator = '.', string $thousandSeparator = "'"): string
    {
        return $number
            ? number_format($number, $decimals, $decimalSeparator, $thousandSeparator)
            : '0.00';
    }
}
