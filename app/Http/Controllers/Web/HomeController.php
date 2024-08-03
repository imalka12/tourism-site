<?php

namespace App\Http\Controllers\Web;

use App\Enums\TourCategory;
use App\Http\Controllers\Controller;
use App\Repositories\ActivityRepository;
use App\Repositories\AttractionRepository;
use App\Repositories\BlogRepository;
use App\Repositories\HomeRepository;
use App\Repositories\ItineraryRepository;
use App\TourType;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function collect;

class HomeController extends Controller
{

    private $homeRepository;
    private $itineraryRepository;
    private $attractionRepository;
    private $activityRepository;
    private $blogRepository;

    public function __construct(
        HomeRepository $homeRepository,
        ItineraryRepository $itineraryRepository,
        AttractionRepository $attractionRepository,
        ActivityRepository $activityRepository,
        BlogRepository $blogRepository
    ) {
        $this->homeRepository = $homeRepository;
        $this->itineraryRepository = $itineraryRepository;
        $this->attractionRepository = $attractionRepository;
        $this->activityRepository = $activityRepository;
        $this->blogRepository = $blogRepository;
    }

    /**
     * @param Request $request
     * @return View $view
     */
    public function showHomePage(Request $request)
    {
        $tripAdvisorReview = $this->homeRepository->getTripAdvisorReviews()->random(1)->first();
        $lametayelReview = $this->homeRepository->getLametayelReviews()->random(1)->first();
        $tourTypes = $this->itineraryRepository->getTourTypesList();
        // dd($tourTypes);
        $attractionTypes = $this->attractionRepository->getAttractionTypesList();
        $activitiesByMonth = $this->getActivitiesByMonth();
        $blogPosts = $this->blogRepository->getAllBlogPosts();
        $transportOptions = $this->homeRepository->getTransportationOptions();
        $maldivesTours = $this->getMaldivesTours();

        return view('pages.home', compact(
            'tripAdvisorReview',
            'lametayelReview',
            'tourTypes',
            'attractionTypes',
            'activitiesByMonth',
            'blogPosts',
            'transportOptions',
            'maldivesTours'
        ));
    }

    /**
     * @return array
     */
    private function getActivitiesByMonth()
    {
        $activities = $this->activityRepository->getCityActivitiesList();

        $_monthly_activities = [];

        foreach ($activities as $activity) {
            $month = strtolower($activity->getFromMonthName());
            if (!array_key_exists($month, $_monthly_activities)) {
                $_monthly_activities[$month] = collect([]);
            }

            $_monthly_activities[$month]->push($activity);
        }

        return $_monthly_activities;
    }

    /**
     *
     */
    public function getMaldivesTours()
    {
        return $this->itineraryRepository->getToursByCategory(TourCategory::MALDIVES);
    }

    /**
     * @param Request $request
     * @return View
     */
    public function showTourSearchPage(Request $request)
    {
        $type = $request->type;
        $month = $request->month;
        $monthName = strtolower($month);

        // redirect to home if type and month is not set or empty
        if(empty($type)) {
            return redirect()->route('site.tour-types');
        }

        // search for the tours including the month and matching tour type
        $tourType = $this->itineraryRepository->getTourTypeBySlug($type);
        $tours = $this->itineraryRepository->getToursByTypeAndMonth($type, $month);
        $tourTypes = $this->itineraryRepository->getTourTypesList();

        $pageSubHeading = 'Find Your Sri Lankan Holiday Package';
        $pageHeading = sprintf("%s Tours on %s", ucwords($tourType->title), ucwords($monthName));
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Search Tours', 'link' => ''],
        ];

        $data = compact('pageHeading', 'pageSubHeading', 'tours', 'tourType', 'tourTypes', 'month', 'monthName');

        return view('pages.tour-search-results', $data);
    }

    /**
     * @param Request $request
     */
    public function handleTourSeachGetMethod(Request $request)
    {
        $type = $request->input('type');
        $month = $request->input('month');
        dd("searching tours of {$type} on {$month}");
    }
}
