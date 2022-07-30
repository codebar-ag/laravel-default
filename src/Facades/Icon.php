<?php

namespace CodebarAg\LaravelDefault\Facades;

use Carbon\Carbon;
use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Date
 */
class Icon extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Icon::class;
    }
}
