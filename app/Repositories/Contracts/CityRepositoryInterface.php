<?php 

namespace App\Repositories\Contracts;

interface CityRepositoryInterface {

    /**
     * Get city by slug
     * 
     * Get city object identified by the slug field
     * 
     * @param string $slug
     * SEO friendly url slug
     * 
     * @return City $city
     */
    public function getCityBySlug(string $slug);

    /** 
     * Get activities for the city
     * 
     * Get city activities for the city identified by the id
     * 
     * @param string $id
     * City id
     * 
     * @return Collection(App\CityActivity) $activities
     * Collection of city activities
     */
    public function getActivitesByCityId($cityId);

}