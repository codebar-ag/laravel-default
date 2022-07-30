<?php

namespace CodebarAg\LaravelDefault\Helpers;

class HelperNumber
{
    public function format(int|float $number, int $decimals = 2, string $decimalSeparator = '.', string $thousandSeparator = "'"): string
    {
        return number_format($number, $decimals, $decimalSeparator, $thousandSeparator);
    }
}
