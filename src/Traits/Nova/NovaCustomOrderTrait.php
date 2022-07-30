<?php

namespace CodebarAg\LaravelDefault\Traits\Nova;

trait NovaCustomOrderTrait
{
    protected static function applyOrderings($query, array $orderings)
    {
        if (empty($orderings) && property_exists(static::class, 'orderBy')) {
            $query->reorder();
            $orderings = static::$orderBy;
        }

        return parent::applyOrderings($query, $orderings);
    }
}
