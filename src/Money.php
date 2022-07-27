<?php

namespace CodebarAg\LaravelDefault;

use CodebarAg\LaravelDefault\Facades\Number;

class Money
{
    public function format(int|float $number, $currency = 'CHF'): string
    {
        return Number::format($number).' '.$currency;
    }

    public function roundMoney(int|float $money): float
    {
        //Round to nearest 0.05
        return round($money * 20) / 20;
    }

    public function roundMoneyUp(int|float $money): float
    {
        //Round Up to nearest 0.05
        return ceil($money * 20) / 20;
    }

    public function roundMoneyDown(int|float $money): float
    {
        //Round Down to nearest 0.05
        return floor($money * 20) / 20;
    }
}
