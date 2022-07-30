<?php

namespace CodebarAg\LaravelDefault\Facades;

use Carbon\Carbon;
use Illuminate\Support\Facades\Facade;
use phpDocumentor\Reflection\Types\Null_;

/**
 * @see \CodebarAg\LaravelDefault\Date
 *
 * @method static string formatDateTime(Carbon $date, string|null $locale = null)
 * @method static string formatDate(Carbon $date)
 */
class Date extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Date::class;
    }
}
