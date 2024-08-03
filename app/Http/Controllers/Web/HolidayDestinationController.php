<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Repositories\HolidayDestinationRepository;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade as PDF;

class HolidayDestinationController extends Controller
{

    private $holidayDestinationRepository;

    public function __construct(HolidayDestinationRepository $holidayDestinationRepository)
    {
        $this->holidayDestinationRepository = $holidayDestinationRepository;
    }

    public function showHolidayDestinationPage(Request $request, $destination)
    {
        $_destination_slug = \rtrim($destination); // trim the additional unwanted chars from the slug text to the right side
        $destination = $this->holidayDestinationRepository->getHolidayDestinationDetailsBySlug($_destination_slug);

        $activities = $this->holidayDestinationRepository->getHolidayDestinationCityActivitiesList($destination->id)->shuffle();

        $hotels = $this->holidayDestinationRepository->getHotelsByHolidayDestinationId($destination->id)->shuffle();

        $cities = $destination->cities;

        $locations = [];
        foreach ($cities as $city) {
            $r = $city->getCoordinates()[0];
            $locations[] = [
                "lat" => floatval($r['lat']),
                "lng" => floatval($r['lng']),
                "title" => $city->title,
                "description" => $city->description
            ];
        }

        $pageSubHeading = 'Holiday Destination';
        $pageHeading = $destination->title;

        // SEO
        SEOMeta::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        SEOMeta::setDescription($destination->meta_description);
        SEOMeta::setCanonical(url()->route('site.holiday-destinations', $destination->slug));

        if (strlen(trim($destination->meta_keywords)) > 0) {
            $__seo_keywords = explode(",", $destination->meta_keywords);
            if (!empty($__seo_keywords)) {
                SEOMeta::addKeyword(array_map('trim', $__seo_keywords));
            }
        }

        OpenGraph::setDescription($destination->meta_description);
        OpenGraph::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        OpenGraph::setUrl(url()->route('site.holiday-destinations', $destination->slug));
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        TwitterCard::setSite('@ExploreThaprobana');

        JsonLd::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        JsonLd::setDescription($destination->meta_description);
        JsonLd::addImage(imageUrl($destination->image));

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Holiday Destinations', 'link' => ''],
            ['title' => $destination->title, 'link' => url()->route('site.holiday-destinations', $destination->slug)],
        ];

        $bannerActions = [
            'download' => ['url' => route('site.holiday-destination-download', $destination->id)],
            'inquiry' => [] // 'label' is optional
        ];

        return view('pages.holiday-destination', compact('pageHeading', 'pageSubHeading', 'destination', 'cities', 'activities', 'hotels', 'locations', 'breadcrumbs', 'bannerActions'));
    }

    public function downloadPrintablePage(Request $request, $destinationId)
    {
        $destination = $this->holidayDestinationRepository->getHolidayDestinationDetailsById($destinationId);
        $activities = $this->holidayDestinationRepository->getHolidayDestinationCityActivitiesList($destination->id)->shuffle();
        $hotels = $this->holidayDestinationRepository->getHotelsByHolidayDestinationId($destination->id)->shuffle();
        $cities = $destination->cities;
        $printable = PDF::loadView('printables.holiday-destination', compact('destination', 'activities', 'hotels', 'cities'));
        $downloadName = Str::snake('Holiday destination' . $destination->title);
        return $printable->download($downloadName . '.pdf');
    }
}
