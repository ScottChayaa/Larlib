<?php

namespace ScottChayaa\Larlib;

use Illuminate\Support\ServiceProvider;

class LarlibServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Route
        include __DIR__.'/routes.php';

        //Language
        $this->loadTranslationsFrom( __DIR__.'/Lang', 'larlib');

        //Publish Config 
        $this->publishes([
            __DIR__.'/Config/larlib.php' => config_path('larlib.php'),
        ] ,'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Config
        $this->mergeConfigFrom( __DIR__.'/Config/larlib.php', 'larlib');

        //View
        $this->loadViewsFrom(__DIR__ . '/Views', 'larlib');

        //Facade => Custom Class
        $this->app['larlib'] = $this->app->share(function($app) {
            return new Larlib;
        });
    }
}
