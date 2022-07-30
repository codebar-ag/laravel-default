<?php

namespace CodebarAg\LaravelDefault;

use CodebarAg\LaravelDefault\Enums\EnvironmentEnum;

class Cache
{
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
