<?php

namespace CodebarAg\LaravelDefault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Helpers\HelperPhone
 *
 * @method static string format(string $country, string $number)
 */
class HelperPhone extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Helpers\HelperPhone::class;
    }
}
