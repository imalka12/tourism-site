<?php 

namespace App\Repositories;

use App\Repositories\Contracts\CityRepositoryInterface;
use App\City;

class CityRepository implements CityRepositoryInterface
{
    
    /**
     * @inheritDoc
     */
    public function getCityBySlug(string $slug) {
        $city = City::where('slug', $slug)->first();
        if (empty($city)) { // return null if city is not found
            return null;
        }

        return $city; // return identified city
    }

    /** 
     * @inheritDoc
     */
    public function getActivitesByCityId($cityId) {
        $city = City::where('id', $cityId)->first();
        if (empty($city)) {
            return null;
        }

        return $city->activities;
    }

}
