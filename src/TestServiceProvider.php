<?php

namespace packdemotest\bleh;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    protected $commands = [
        'DemoPackage\Bleh\Commands\MyCommand',

    ];

    public function boot()
    {
       require __DIR__.'/routes.php';

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->commands($this->commands);

        $this->app['test'] = $this->app->share(function($app) {
            return new Bleh;
        });
    }
}
