<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use App\Repositories\CityRepository;

class CityController extends Controller
{
    private $cityRepository;

    public function __construct(CityRepository $cityRepository) {
        $this->cityRepository = $cityRepository;
    }

    public function showCityPage(Request $request, $city)
    {
        $city = $this->cityRepository->getCityBySlug($city) ;
        
        if (empty($city)) {
            return abort(404, 'City not found');
        }

        $activities = $this->cityRepository->getActivitesByCityId($city->id);

        $pageSubHeading = 'Holiday Destination City';
        $pageHeading = $city->title;


        // SEO
        SEOMeta::setTitle($city->title);
        SEOMeta::setDescription($city->meta_description);
        SEOMeta::setCanonical(url()->route('site.city', $city->slug));
        
        if (strlen(trim($city->meta_keywords)) > 0) {
            $__seo_keywords = explode(",", $city->meta_keywords);
            if(!empty($__seo_keywords)) {
                SEOMeta::addKeyword(array_map('trim', $__seo_keywords));
            }
        }

        OpenGraph::setDescription($city->meta_description);
        OpenGraph::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        OpenGraph::setUrl(url()->route('site.city', $city->slug));
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        TwitterCard::setSite('@ExploreThaprobana');

        JsonLd::setTitle(sprintf('%s - %s', $pageSubHeading, $pageHeading));
        JsonLd::setDescription($city->meta_description);
        JsonLd::addImage(imageUrl($city->image));

        $breadcrumbs = [
            [ 'title' => 'Home', 'link' => route('site.home') ],
            [ 'title' => 'City', 'link' => '' ],
            [ 'title' => $city->title, 'link' => url()->route('site.city', $city->slug) ],
        ];

        return view('pages.city', compact('pageHeading', 'pageSubHeading', 'city', 'activities', 'breadcrumbs'));
    }

}
 