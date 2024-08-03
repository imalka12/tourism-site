<?php

namespace App\Repositories\Contracts;

use App\Enums\TourCategory;
use App\Itinerary;

interface ItineraryRepositoryInterface {

    /**
     * Get itinerary by slug
     *
     * @param string $slug
     * URL slug for the itinerary
     *
     * @return \App\Itinerary $itinerary
     * Itinerary identified by the slug
     */
    public function getItineraryBySlug($slug);

    /**
     * Get itineraries list
     *
     * @return Collection<\App\Itinerary> $itineraries
     */
    public function getItinerariesList();

    /**
     * Get itinerary days for the itinerary
     *
     * @param string|int $id
     * Itinerary id
     *
     * @return Collection<ItineraryDay> $itineraryDays
     * List of itinerary days
     */
    public function getItineraryDaysForItinerary($id);

    /**
     * Get activities by itinerary id
     *
     * @param string|int $id
     * Itinerary id
     *
     * @return Collection<\App\Activity> $activities
     * List of activities
     */
    public function getActivitiesByItineraryId($id);

    /**
     * Get inclusions and exclusions for itinerary identified by the id
     *
     * @param string|int $id
     * Itinerary Id
     *
     * @return array $data
     */
    public function getInclusionsByItineraryId($id);

    /**
     * Get itineraries containing given 'month' value in only_months value
     *
     * @param string $month
     * Month name value
     *
     * @return Collection<Itinerary> $itineraries
     * A collection of Itineraries
     */
    public function getItinerariesForMonth($month);

    /**
     * Get tours types list
     *
     * @return Collection<\App\TourType> $types
     */
    public function getTourTypesList();

    /**
     * Get tour by tour type
     *
     * @param string $type type
     *
     * @return Collection<App\Itinerary> $tours
     */
    public function getToursByTourType($type);

    /**
     * Get tours by type and month
     *
     * @param string $type
     * @param string $month
     * @return Collection<App\Itinerary> $tours
     */
    public function getToursByTypeAndMonth($type, $month);

    /**
     * Get tour type by slug
     *
     * @param string $slug
     *
     * @return Collection<App\TourType> $tourType
     */
    public function getTourTypeBySlug($slug);

    /**
     * Get tour type by id
     *
     * @param string $id
     *
     * @return Collection<App\TourType> $tourType
     */
    public function getTourTypeById($id);


    /**
     * Get tours belongs to the category
     *
     * @param $category
     * @return Collection<Itinerary> $tours
     */
    public function getToursByCategory($category);

    /**
     * Get all activities for cities in the itinerary
     * @param Itinerary $itinerary
     * @return mixed
     */
    public function getActivitiesForItinerary(Itinerary $itinerary);

}
