<?php

namespace WW\Countries;

use Illuminate\Support\ServiceProvider;
use WW\Countries\Console\Commands\InstallTranslationCommand;

class LaravelCountriesServiceProvider extends ServiceProvider
{
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
