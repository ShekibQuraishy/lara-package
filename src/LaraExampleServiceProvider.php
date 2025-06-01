<?php

namespace shekibquraishy\LaraExample;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use shekibquraishy\LaraExample\Commands\LaraExampleCommand;

class LaraExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lara-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lara_example_table')
            ->hasCommand(LaraExampleCommand::class);
    }
}
