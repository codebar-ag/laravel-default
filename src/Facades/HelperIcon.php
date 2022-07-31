<?php

namespace CodebarAg\LaravelDefault\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Helpers\HelperDate
 *
 * @method static Collection list()
 * @method static Collection heroicons()
 * @method static Collection fontawesome()
 */
class HelperIcon extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Helpers\HelperIcon::class;
    }
}
