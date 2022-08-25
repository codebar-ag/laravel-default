<?php

namespace CodebarAg\LaravelDefault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Helpers\HelperMoney
 *
 * @method static string format(int|float $number, string $currency = 'CHF')
 * @method static string formatLeft(int|float $number, string $currency = 'CHF')
 * @method static float roundMoney(int|float $money)
 * @method static float roundMoneyUp(int|float $money)
 * @method static float roundMoneyDown(int|float $money)
 */
class HelperMoney extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Helpers\HelperMoney::class;
    }
}
