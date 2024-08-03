<?php

namespace App\Repositories;

use App\Enums\ActiveStatus;
use App\Repositories\Contracts\HolidayDestinationRepositoryInterface;
use DB;
use App\HolidayDestination;
use App\City;

class HolidayDestinationRepository implements HolidayDestinationRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function getHolidayDestinationDetailsBySlug(string $slug) {
        return HolidayDestination::where('slug', $slug)->first();
    }

    /**
     * @inheritDoc
     */
    public function getHolidayDestinationCityActivitiesList($destinationId) {
       $destination = HolidayDestination::find($destinationId);
       $cityIds = $destination->cities->pluck('id')->toArray();

        // find activities for the city ids
       $cityActivities = DB::table('city_activities')
                        ->join('activities', 'city_activities.activity_id', 'activities.id')
                        ->select('city_activities.*', 'activities.title as activity_name')
                        ->whereIn('city_id', $cityIds)
                        ->get();

        return $cityActivities;
    }

    /**
     * @inheritDoc
     */
    public function getHotelsByHolidayDestinationId($destinationId) {
        $destination = HolidayDestination::find($destinationId);
        $cityIds = $destination->cities->pluck('id')->toArray();

        $hotels = DB::table('hotels')
        ->join('cities', 'hotels.city_id', 'cities.id')
        ->whereIn('city_id', $cityIds)
        ->select('hotels.*', 'cities.title as city_name')
        ->get();

        return $hotels;
    }

    /**
     * @inheritDoc
     */
    public function getHolidayDestinationsList() {
        return HolidayDestination::where('active_status', ActiveStatus::ACTIVE)->get();
    }

    /**
     * @inheritDoc
     */
    public function getHolidayDestinationDetailsById($id) {
        return HolidayDestination::where('id', $id)->first();
    }

}
