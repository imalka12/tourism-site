<?php 

namespace App\Repositories\Contracts;

interface HolidayDestinationRepositoryInterface {
    
    /**
     * Get the holiday destination entry identified by the slug text
     * 
     * @param string $slug
     * @return \App\HolidayDestiation $destination
     */
    public function getHolidayDestinationDetailsBySlug(string $slug);

    /**
     * Get the list of activities for the cities included in the holiday destination
     * 
     * @param string|int $destinationID
     * HolidayDestination object id
     * 
     * @return Collection<\App\Activity> $activities
     * Activities of the cities in the holiday destination
     */
    public function getHolidayDestinationCityActivitiesList($destinationId);

    /**
     * Get the list of hotels in the cities of the Holiday Destination
     * 
     * @param string|int $destination$id
     * HolidayDestination object id
     * 
     * @return Collection<\App\Hotel> $hotels
     * List of hotels in the cities list of the holiday destination
     */
    public function getHotelsByHolidayDestinationId($destinationId);

    /**
     * Get the list of Holiday Destinations registered in the system
     * 
     * @return Collection<\App\HolidayDestination> $destinations
     */
    public function getHolidayDestinationsList();

    /**
     * Get the holiday destination entry identified by the ID
     * 
     * @param string|int $id
     * @return \App\HolidayDestiation $destination
     */
    public function getHolidayDestinationDetailsById($id);

}