<?php

namespace CodebarAg\LaravelDefault\Policies;

use CodebarAg\FeaturePolicy\Directive;
use CodebarAg\FeaturePolicy\Policies\Basic;

class FeaturePolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this
            ->addDirective(Directive::CAMERA, config('laravel-default.feature_policy.camera'))
            ->addDirective(Directive::FULLSCREEN, config('laravel-default.feature_policy.fullscreen'));
    }
}
