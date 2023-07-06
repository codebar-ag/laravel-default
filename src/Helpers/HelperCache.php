<?php

namespace CodebarAg\LaravelDefault\Helpers;

use CodebarAg\LaravelDefault\Enums\EnvironmentEnum;

class HelperCache
{
    public function inSeconds(): int
    {
        return match (app()->environment()) {
            EnvironmentEnum::PRODUCTION()->value => config('laravel-default.cache.production', 604800),
            EnvironmentEnum::STAGING()->value => config('laravel-default.cache.staging', 86400),
            default => config('laravel-default.cache.default', 1)
        };
    }
}
