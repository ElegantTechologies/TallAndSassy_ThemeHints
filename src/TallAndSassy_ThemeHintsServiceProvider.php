<?php

namespace ElegantTechnologies\TallAndSassy_ThemeHints;

use Illuminate\Support\ServiceProvider;

class TallAndSassy_ThemeHintsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'eleganttechnologies');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'eleganttechnologies');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tallandsassy_themehints.php', 'tallandsassy_themehints');

        // Register the service the package provides.
        $this->app->singleton('tallandsassy_themehints', function ($app) {
            return new TallAndSassy_ThemeHints;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tallandsassy_themehints'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/tallandsassy_themehints.php' => config_path('tallandsassy_themehints.php'),
        ], 'tallandsassy_themehints.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/eleganttechnologies'),
        ], 'tallandsassy_themehints.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/eleganttechnologies'),
        ], 'tallandsassy_themehints.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/eleganttechnologies'),
        ], 'tallandsassy_themehints.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
