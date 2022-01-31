<?php

namespace FaarenTech\WebhookReceiver;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class WebhookReceiverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . "/../config/config.php",
            'webhook_receiver'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
        $this->registerRoutes();

        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . "/../config/config.php" => config_path('webhook_receiver.php')
            ], 'config');
        }
    }

    protected function registerRoutes()
    {
        $routeConfig = [
            'prefix' => config('webhook_receiver.prefix'),
            'middleware' => config('webhook_receiver.middleware')
        ];
        Route::group($routeConfig, function() {
            $this->loadRoutesFrom(__DIR__ . "/../routes/webhooks.php");
        });
    }
}
