<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AllowedCountriesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AllowedCountriesService';
    }
}

