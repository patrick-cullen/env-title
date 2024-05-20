<?php

namespace PatrickCullen\EnvTitle;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EnvTitleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('env-title')
            // ->hasConfigFile()
            ->hasViews()
            ->publishesServiceProvider('EnvTitleServiceProvider')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publish('views')
                    ->copyAndRegisterServiceProviderInApp();
            });
    }
}
