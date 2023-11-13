<?php
namespace App\Services;

class AllowedCountriesService
{
    protected $allowedCountries = ['USA', 'Canada', 'UK', 'Australia'];

    public function isAllowed($country)
    {
        // Check if the given country is in the list of allowed countries
        return in_array($country, $this->allowedCountries);
    }



}