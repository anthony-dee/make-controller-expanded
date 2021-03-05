<?php

namespace AnthonyDee\MakeControllerExpanded;

use Illuminate\Support\ServiceProvider;

class MakeControllerExpandedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('make-controller-expanded.php'),
            ], 'config');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'make-controller-expanded');

        // Register the main class to use with the facade
        /*$this->app->singleton('make-controller-expanded', function () {
            return new MakeControllerExpanded;
        });*/
    }
}
