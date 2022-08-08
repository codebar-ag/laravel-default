<?php

namespace CodebarAg\LaravelDefault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Helpers\HelperDevice
 *
 * @method static string isMobileDevice()
 */
class HelperDevice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Helpers\HelperDevice::class;
    }
}
