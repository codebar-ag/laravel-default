<?php

namespace CodebarAG\LaravelDefault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Money
 *
 * @method static float roundMoney(int|float $money)
 * @method static float roundMoneyUp(int|float $money)
 * @method static float roundMoneyDown(int|float $money)
 */
class Money extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAG\LaravelDefault\Money::class;
    }
}
