<?php

namespace Myolchauz\Mycashbackclient;

use Illuminate\Support\ServiceProvider;

class MycashbackclientServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'myolchauz');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'myolchauz');
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
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mycashbackclient.php', 'mycashbackclient');

        // Register the service the package provides.
        $this->app->singleton('mycashbackclient', function ($app) {
            return new Mycashbackclient;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['mycashbackclient'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/mycashbackclient.php' => config_path('mycashbackclient.php'),
        ], 'mycashbackclient.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/myolchauz'),
        ], 'mycashbackclient.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/myolchauz'),
        ], 'mycashbackclient.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/myolchauz'),
        ], 'mycashbackclient.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
