<?php

namespace CodebarAg\LaravelDefault\Policies;

use CodebarAg\FeaturePolicy\Directive;
use CodebarAg\FeaturePolicy\Policies\Basic;
use CodebarAg\FeaturePolicy\Value;

class FeaturePolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this
            ->addDirective(Directive::CAMERA, Value::SELF)
            ->addDirective(Directive::FULLSCREEN, Value::SELF);
    }
}
