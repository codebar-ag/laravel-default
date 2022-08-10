<?php

namespace CodebarAg\LaravelDefault\Helpers;

use CodebarAg\LaravelDefault\Enums\EnvironmentEnum;
use Illuminate\Support\Facades\Cache;

class HelperCache
{
    public function cacheForeverWithTags(array $tags, string $key, $store)
    {
        return match (config('cache.default')) {
            'redis', 'memcached' => Cache::tags($tags)->rememberForever($key, function () use ($store) {
                return $store;
            }),
            default => Cache::rememberForever($key, function () use ($store) {
                return $store;
            }
            ),
        };
    }

    public function cacheRememberWithTags(array $tags, string $key, int $time, $store)
    {
        return match (config('cache.default')) {
            'redis', 'memcached' => Cache::tags($tags)->remember($key, $time, function () use ($store) {
                return $store;
            }),
            default => Cache::remember($key, $time, function () use ($store) {
                return $store;
            }
            ),
        };
    }

    public function flushTags(array $tags): bool
    {
        return match (config('cache.default')) {
            'redis', 'memcached' => Cache::tags($tags)->flush(),
            default => Cache::flush()
        };
    }

    public function inSeconds(): int
    {
        $default = config('laravel-default.cache.in_seconds', null);

        if (! is_null($default) && is_int($default)) {
            return $default;
        }

        return match (app()->environment()) {
            EnvironmentEnum::PRODUCTION()->value => 604800, // 1week
            EnvironmentEnum::STAGING()->value => 86400, // 1day
            default => 1,
        };
    }
}
