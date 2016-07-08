<?php

namespace KoodiLabs\SocialReg;

use Illuminate\Support\ServiceProvider;
use KoodiLabs\SocialReg\Commands\SocialRegistrationGeneratorCommand;

class SocialRegistrationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('koodilabs.scaffold', function ($app) {
            return new SocialRegistrationGeneratorCommand();
        });

        $this->commands([
            'koodilabs.scaffold'
        ]);
    }
}