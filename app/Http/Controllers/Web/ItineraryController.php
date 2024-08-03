<?php

namespace App\Http\Controllers\Web;

use App\Enums\ActiveStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Repositories\ItineraryRepository;
use App\Enums\MonthOfYear;

class ItineraryController extends Controller
{
    private $itineraryRepository;

    public function __construct(ItineraryRepository $itineraryRepository)
    {
        $this->itineraryRepository = $itineraryRepository;
    }

    /**
     * Show the tour package/itinerary page
     */
    public function showItineraryPage(Request $request, string $itinerarySlug)
    {
        $itinerary = $this->itineraryRepository->getItineraryBySlug($itinerarySlug);
        if (empty($itinerary)) {
            return abort(404, 'Itinerary not found');
        }

        $itineraryDays = $this->itineraryRepository->getItineraryDaysForItinerary($itinerary->id);
        $hotels = $this->__getHotelsFromItineraryDays($itineraryDays);
        if (count(array_filter($hotels, function ($hotel) {
            return $hotel !== null;
        })) > 0) {
            $hotelLocations = $this->__getHotelLocationsList($hotels);
        } else {
            $hotelLocations = '';
        }

        $attractions = $this->__getAttractionsFromItineraryDays($itineraryDays);
        $activities = $this->itineraryRepository->getActivitiesByItineraryId($itinerary->id);
        $inexclusions = $this->itineraryRepository->getInclusionsByItineraryId($itinerary->id);
        $waypoints = $this->__getWaypointsFromItineraryPlaces($itinerary);

        $pageSubHeading = 'Holiday Package';
        $pageHeading = $itinerary->title;

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'City', 'link' => ''],
            ['title' => $itinerary->title, 'link' => url()->route('site.itinerary', $itinerary->slug)],
        ];

        // SEO
        SEOMeta::setTitle($itinerary->title);
        SEOMeta::setDescription($itinerary->meta_description);
        SEOMeta::setCanonical(url()->route('site.itinerary', $itinerary->slug));

        if (strlen(trim($itinerary->meta_keywords)) > 0) {
            $__seo_keywords = explode(",", $itinerary->meta_keywords);
            if (!empty($__seo_keywords)) {
                SEOMeta::addKeyword(array_map('trim', $__seo_keywords));
            }
        }

        OpenGraph::setDescription($itinerary->meta_description);
        OpenGraph::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        OpenGraph::setUrl(url()->route('site.itinerary', $itinerary->slug));
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        TwitterCard::setSite('@ExploreThaprobana');

        JsonLd::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        JsonLd::setDescription($itinerary->meta_description);
        JsonLd::addImage(imageUrl($itinerary->image));

        return view('pages.itinerary', compact('pageHeading', 'pageSubHeading', 'itinerary', 'itineraryDays', 'hotels', 'hotelLocations', 'attractions', 'activities', 'inexclusions', 'waypoints', 'breadcrumbs'));
    }

    public function __getWaypointsFromItineraryPlaces($itinerary)
    {
        // dd($itinerary);
        $__coordinates = [];
        foreach ($itinerary->places as $place) {
            $coor = $place->getCoordinates()[0];
            $coor['title'] = $place->title;
            $__coordinates[] = $coor;
        }
        return $__coordinates;
    }

    private function __getHotelsFromItineraryDays($itineraryDays)
    {
        $__hotels = [];
        foreach ($itineraryDays as $day) {
            $__hotels[] = $day->hotel;
        }
        return $__hotels;
    }

    private function __getHotelLocationsList($hotels)
    {
        $__locations = [];
        foreach ($hotels as $hotel) {
            $r = $hotel->getCoordinates()[0];
            $__locations[] = [
                "lat" => floatval($r['lat']),
                "lng" => floatval($r['lng']),
                "title" => $hotel->title,
                "description" => $hotel->description,
            ];
        }
        return $__locations;
    }

    private function __getAttractionsFromItineraryDays($itineraryDays)
    {
        $__attractions = [];
        foreach ($itineraryDays as $day) {
            foreach ($day->attractions as $__attraction) {
                $__attractions[] = $__attraction;
            }
        }
        return $__attractions;
    }

    public function showToursByMonthPage(Request $request)
    {
        $pageSubHeading = 'Tours';
        $pageHeading = 'By Month';

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Tours by month', 'link' => ''],
        ];

        $MONTHS = MonthOfYear::class;

        return view('pages.tours-by-month', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'MONTHS'));
    }

    public function showToursForSelectedMonth(Request $request, $month)
    {
        $monthName = \ucwords($month);
        $pageSubHeading = 'Tours';
        $pageHeading = 'For ' . $monthName;
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Tours by month', 'link' => route('site.tours-by-month')],
            ['title' => 'Tours for ' . $monthName, 'link' => ''],
        ];

        $itineraries = $this->itineraryRepository->getItinerariesForMonth($month)->where('active_status', ActiveStatus::ACTIVE);

        return view('pages.tours-for-month', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'monthName', 'itineraries'));
    }

    public function showToursByTypePage(Request $request, $type)
    {
        $type = $request->type;
        $tourType = $this->itineraryRepository->getTourTypeBySlug($type);

        //Anuradha added
        $tours =  $this->itineraryRepository->getToursByTypeId(3);
        $tourTypes = $this->itineraryRepository->getTourTypesList();
        //Anuradha added

        // $tour =


        $pageSubHeading = 'Find Your Sri Lankan Holiday Package';
        $pageHeading = sprintf("%s Tours", ucwords($tourType->title));
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Blog', 'link' => ''],
        ];
        // return view('pages.tour-search-results', compact('pageHeading', 'pageSubHeading', 'tours', 'tourType', 'tourTypes', 'month', 'monthName'));

        return view('pages.tour-search-results', compact('pageHeading', 'pageSubHeading', 'tours', 'tourType', 'tourTypes'));
        // return view('pages.tour-search-results', compact('pageHeading', 'pageSubHeading', 'tourType'));
    }
}
