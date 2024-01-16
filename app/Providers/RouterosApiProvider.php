<?php

namespace App\Providers;

use App\Api\RouterosAPI;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RouterosApiProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides()
    {
        return [RouterosAPI::class];
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(RouterosAPI::class, function ($app) {
            return new RouterosAPI();
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
