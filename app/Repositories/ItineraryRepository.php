<?php

namespace App\Repositories;

use App\CityActivity;
use App\Enums\ActiveStatus;
use App\Enums\TourCategory;
use App\Repositories\Contracts\Collection;
use App\Repositories\Contracts\ItineraryRepositoryInterface;
use DB;
use App\Itinerary;
use App\ItineraryDay;
use App\Activity;
use App\Enums\InclusionType;
use App\TourType;

class ItineraryRepository implements ItineraryRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getItineraryBySlug($slug)
    {
        return Itinerary::where('slug', $slug)->with('itineraryDays')->first();
    }

    /**
     * @inheritDoc
     */
    public function getItinerariesList()
    {
        return Itinerary::with('itineraryDays', 'tourType')->where('active_status', ActiveStatus::ACTIVE)->get();
    }

    /**
     * @inheritDoc
     */
    public function getItineraryDaysForItinerary($itineraryId)
    {
        // dd($itineraryId);
        return ItineraryDay::where('itinerary_id', $itineraryId)->orderBy('day_number')->with(['hotel', 'attractions'])->get();
    }

    /**
     * @inheritDoc
     */
    public function getActivitiesByItineraryId($id)
    {
        $activities = ItineraryDay::where('itinerary_id', 1)->with('activities')->get()->pluck('activities');
        return $activities->flatten();
    }

    /**
     * @inheritDoc
     */
    public function getInclusionsByItineraryId($id)
    {
        $itinerary = Itinerary::where('id', $id)->first();
        $inclusions = $itinerary->itineraryInclusions->where('type', 'INCLUSION');
        $exclusions = $itinerary->itineraryInclusions->where('type', 'EXCLUSION');
        return collect([
            'inclusions' => $inclusions,
            'exclusions' => $exclusions,
        ]);
    }

    /**
     * @inheritDoc
     */
    public function getItinerariesForMonth($month)
    {
        return Itinerary::where('only_months', 'like', "%{$month}%")->get();
    }

    /**
     * @inheritDoc
     */
    public function getTourTypesList()
    {
        return TourType::all();
    }

    /**
     * @inheritDoc
     */
    public function getToursByTourType($type)
    {
        $tourType = TourType::where('slug', $type)->first();
        return Itinerary::where('tour_type_id', $tourType->id)->get();
    }

    /**
     * @inheritDoc
     */
    public function getToursByTypeAndMonth($type, $month)
    {
        $tourType = TourType::where('slug', $type)->first();
        return Itinerary::where('only_months', 'like', "%{$month}%")
            ->where('tour_type_id', $tourType->id)
            ->get();
    }

    /**
     * @inheritDoc
     */
    public function getTourTypeBySlug($slug)
    {
        return TourType::where('slug', $slug)->first();
    }

    /**
     * @inheritDoc
     */
    public function getTourTypeById($id)
    {
        return TourType::where('id', $id)->first();
    }

    /**
     * @inheritDoc
     */
    public function getToursByCategory($category)
    {
        return Itinerary::join('tour_types', 'itineraries.tour_type_id', 'tour_types.id')
            ->where('tour_types.type_key', $category)
            ->select('itineraries.*')
            ->get();
    }


    public function getToursByTypeId($type)
    {
        return Itinerary::where('tour_type_id', $type)->get();
    }



    /**
     * @inheritdoc
     */
    public function getActivitiesForItinerary(Itinerary $itinerary)
    {
        //        return CityActivity::
    }
}
