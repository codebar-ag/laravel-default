<?php

namespace CodebarAg\LaravelDefault\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self PRODUCTION()
 * @method static self STAGING()
 * @method static self LOCAL()
 */
class EnvironmentEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'PRODUCTION' => 'production',
            'STAGING' => 'staging',
            'LOCAL' => 'local',
        ];
    }

    protected static function labels(): array
    {
        return [
            'PRODUCTION' => 'production',
            'STAGING' => 'staging',
            'LOCAL' => 'local',
        ];
    }
}
