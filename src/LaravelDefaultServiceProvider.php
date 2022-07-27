<?php

namespace CodebarAG\LaravelDefault;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;

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
            ->hasConfigFile()
            ->hasViews();
            #->hasMigration('create_skeleton_table')
            #->hasCommand(SkeletonCommand::class)
    }
}
