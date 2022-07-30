<?php

namespace CodebarAg\LaravelDefault\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self DE()
 * @method static self EN()
 * @method static self IT()
 * @method static self FR()
 */

class LanguageEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'DE' => 'de_CH',
            'FR' => 'fr_CH',
            'IT' => 'it_CH',
            'EN' => 'en_CH',
        ];
    }

    protected static function labels(): array
    {
        return [
            'DE' => 'de_CH',
            'FR' => 'fr_CH',
            'IT' => 'it_CH',
            'EN' => 'en_CH',
        ];
    }
}
