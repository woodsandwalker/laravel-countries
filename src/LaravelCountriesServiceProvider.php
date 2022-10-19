<?php

namespace WW\Countries;

use Illuminate\Support\ServiceProvider;
use WW\Countries\Console\Commands\InstallTranslationCommand;

class LaravelCountriesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/countries.php' => config_path('countries.php'),
        ], 'countries-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            InstallTranslationCommand::class
        ]);
    }
}
