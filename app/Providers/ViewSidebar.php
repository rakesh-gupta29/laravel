<?php

namespace App\Providers;

use Illuminate\Support\Facades;
use Illuminate\View\View;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class ViewSidebar extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Facades\View::composer('cars', function (View $view) {
            $url = "https://jsonplaceholder.typicode.com/posts";
            //  making a call to this API and render the data

            $cars = array("Volvo", "BMW", "Toyota");
            $view->with('cars', $cars);

        });
    }
}
