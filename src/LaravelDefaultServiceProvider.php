<?php

namespace CodebarAg\LaravelDefault;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDefaultServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-default')
            ->hasConfigFile('laravel-default')
            ->hasViews();
    }
}
