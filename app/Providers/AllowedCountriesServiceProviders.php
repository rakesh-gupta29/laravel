<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AllowedCountriesService;

class AllowedCountriesServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind('AllowedCountriesService', function () {
            return new AllowedCountriesService();
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
