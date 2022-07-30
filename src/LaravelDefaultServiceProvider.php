<?php

namespace CodebarAg\LaravelDefault;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDefaultServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-default')
            ->hasConfigFile('laravel-default')
            ->hasViews()
            ->hasTranslations()
            ->hasViewComponents('icon', 'favicon');
    }
}
