<?php

namespace MOSS\MOSS;

use MOSS\MOSS\Commands\MOSSCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MOSSServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('moss')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_moss_table')
            ->hasCommand(MOSSCommand::class);
    }
}
