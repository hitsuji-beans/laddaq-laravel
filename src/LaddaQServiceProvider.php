<?php

namespace LaddaQ\LaddaQ;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LaddaQ\LaddaQ\Commands\LaddaQCommand;

class LaddaQServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laddaq-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laddaq-laravel_table')
            ->hasCommand(LaddaQCommand::class);
    }
}
