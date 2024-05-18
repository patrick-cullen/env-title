<?php

namespace PatrickCullen\EnvTitle;

use Spatie\LaravelPackageTools\Package;
use PatrickCullen\EnvTitle\Components\EnvTitle;
use PatrickCullen\EnvTitle\Commands\EnvTitleCommand;
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
            ->hasViewComponents('pc', EnvTitle::class)
            // ->hasMigration('create_env-title_table')
            // ->hasCommand(EnvTitleCommand::class)
            ;
    }
}
