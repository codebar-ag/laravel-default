<?php

namespace CodebarAg\LaravelDefault\Facades;

use Carbon\Carbon;
use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Helpers\HelperDate
 *
 * @method static string formatDateTime(Carbon $date, string|null $locale = null)
 * @method static string formatDate(Carbon $date)
 */
class HelperDate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Helpers\HelperDate::class;
    }
}
