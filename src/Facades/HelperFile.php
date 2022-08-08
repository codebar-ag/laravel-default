<?php

namespace CodebarAg\LaravelDefault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Helpers\HelperFile
 *
 * @method static string formatBytes(int $size, int $precision = 1)
 */
class HelperFile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Helpers\HelperFile::class;
    }
}
