<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ColorNamingService;
use Illuminate\Contracts\Foundation\Application;

class ColorNamingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ColorNamingService::class, function (Application $app) {
            return new ColorNamingService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}