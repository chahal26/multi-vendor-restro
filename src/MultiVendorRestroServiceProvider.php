<?php

namespace Chahal26\MultiVendorRestro;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Chahal26\MultiVendorRestro\Commands\MultiVendorRestroCommand;

class MultiVendorRestroServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('multi-vendor-restro')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_multi-vendor-restro_table')
            ->hasCommand(MultiVendorRestroCommand::class);
    }
}
