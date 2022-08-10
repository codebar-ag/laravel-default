<?php

namespace CodebarAg\LaravelDefault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\LaravelDefault\Helpers\HelperCache
 *
 * @method static int cacheForeverWithTags(array $tags, string $key, $store)
 * @method static int cacheRememberWithTags(array $tags, string $key, int $time, $store)
 * @method static int flushTags(array $tags)
 * @method static int inSeconds()
 */
class HelperCache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodebarAg\LaravelDefault\Helpers\HelperCache::class;
    }
}
