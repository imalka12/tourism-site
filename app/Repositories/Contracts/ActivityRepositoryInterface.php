<?php 

namespace App\Repositories\Contracts;

interface ActivityRepositoryInterface {

    /**
     * Get activity by id
     * 
     * Get activity identified by the object id
     * 
     * @param string|int $id
     * Activity ID
     * 
     * @return \App\Activity $activity
     */
    public function getActivityById($id);

    /**
     * Get activity by slug
     * 
     * Get activity identified by the slug
     * 
     * @param string $slug
     * Slug of the activity objet
     * 
     * @return \App\Activity $activity
     */
    public function getActivityBySlug(string $slug);

    /**
     * Get activities list by city
     * 
     * Get the list of activies attached to the city
     * 
     * @param string|int $id
     * Activity id
     * 
     * @return Collection<\App\Activity> $activities
     */
    public function getActivitiesListByCity($id);

    /**
     * Get city activity activity by slug
     * 
     * Get activity from city activity identified by the slug
     * 
     * @param string $slug
     * Slug of the city activity objet
     * 
     * @return \App\Activity $activity
     */
    public function getActivityByCityActivitySlug(string $slug);

    /**
     * Get city activity city by slug
     * 
     * Get city activity identified by the slug
     * 
     * @param string $slug
     * Slug of the city activity objet
     * 
     * @return \App\City $city
     */
    public function getCityByCityActivitySlug(string $slug);

    /**
     * Get city activity by slug
     * 
     * Get city activity identified by slug
     * 
     * @param string $slug
     * URL slug for the city activity entry
     * 
     * @return \App\CityActivity $cityActivty
     */
    public function getCityActivitySlug(string $slug);

    /**
     * Get activity cities
     * 
     * Get the list of city activity with city related to the activity id
     * 
     * @param string|int $activityId
     * Activty ID
     * 
     * @return Collection<\App\City> $cities
     * List of cities
     */
    public function getActivityCities($activityId);

    /**
     * Get a list of activities
     * 
     * @return Collection<\App\Activity> $activities
     * A collection of activities
     */
    public function getActivitiesList();

    /**
     * Get a list of city activities
     * 
     * @return Collection<App\CityActivity>
     */
    public function getCityActivitiesList();

}
