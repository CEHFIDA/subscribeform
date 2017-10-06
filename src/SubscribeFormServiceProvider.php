<?php

namespace Selfreliance\subscribeform;

use Illuminate\Support\ServiceProvider;

class SubscribeFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Selfreliance\Subscribeform\SubscribeFormController');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([
            __DIR__.'/configs/subscribeform.php' => config_path('subscribeform.php')
        ], 'config');  
        $this->publishes([
            __DIR__ . '/migrations/' => base_path('/database/migrations')
        ], 'migrations')
        $this->publishes([
            __DIR__.'/js/subscribe.js' => public_path('vendor/subscribe/subscribe.js')
        ], 'javascript');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
