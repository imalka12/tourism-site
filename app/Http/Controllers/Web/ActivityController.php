<?php

namespace App\Http\Controllers\Web;

use App\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ActivityRepository;

class ActivityController extends Controller
{

    private $activityRepository;

    public function __construct(ActivityRepository $activityRepository)
    {
        $this->activityRepository = $activityRepository;
    }

    /**
     * Show activity details page
     *
     * @param string $activity
     * Activity slug text
     */
    public function showActivityPage(Request $request, $activity)
    {
        $activity = $this->activityRepository->getActivityBySlug($activity);
        $cities = $this->activityRepository->getActivityCities($activity->id);
        $locations = [];
        if (!empty($cities)) {
            foreach ($cities as $city) {
                $r = $city->city->getCoordinates()[0];
                $locations[] = [
                    "lat" => floatval($r['lat']),
                    "lng" => floatval($r['lng']),
                    "title" => $city->title,
                    "description" => $city->description
                ];
            }
        }

        $pageSubHeading = 'Activity';
        $pageHeading = $activity->title;

        $city = $activity->city;

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Activity', 'link' => ''],
            ['title' => $activity->title, 'link' => url()->route('site.activity', $activity->slug)],
        ];

        return view('pages.activity', compact('pageHeading', 'pageSubHeading', 'activity', 'cities', 'locations', 'breadcrumbs'));
    }

    public function showCityActivityPage(Request $request, $activity)
    {
        $cityActivity = $this->activityRepository->getCityActivitySlug($activity);

        $cities = $this->activityRepository->getActivityCities($cityActivity->activity->id);

        $locations = [];
        if (!empty($cities)) {
            foreach ($cities as $city) {
                $r = $city->city->getCoordinates()[0];
                $locations[] = [
                    "lat" => floatval($r['lat']),
                    "lng" => floatval($r['lng']),
                    "title" => $city->title,
                    "description" => $city->description
                ];
            }
        }

        $pageSubHeading = 'Activity';
        $pageHeading = $cityActivity->title;

        $activity = $cityActivity->activity;
        $city = $cityActivity->city;

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => $city->title, 'link' => url()->route('site.city', $city->slug)],
            ['title' => $cityActivity->title, 'link' => url()->route('site.city-activity', $cityActivity->slug)],
        ];
        return view('pages.activity', compact('pageHeading', 'pageSubHeading', 'cityActivity', 'activity', 'cities', 'locations', 'breadcrumbs'));
    }

    function getAllActivities() {
        $activities = Activity::all();

        return response()->json($activities);
    }
}
