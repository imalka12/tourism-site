<?php

namespace App\Http\Controllers\Web;

use App\Enums\TransportOptionType;
use App\Http\Controllers\Controller;
use App\Repositories\AboutRepository;
use App\Repositories\HomeRepository;
use App\Repositories\TestimonialsRepository;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $testimonialsRepository;
    private $aboutRepository;
    private $homeRepository;

    public function __construct(TestimonialsRepository $testimonialsRepository, AboutRepository $aboutRepository, HomeRepository $homeRepository)
    {
        $this->testimonialsRepository = $testimonialsRepository;
        $this->aboutRepository = $aboutRepository;
        $this->homeRepository = $homeRepository;
    }

    public function showOurTeamPage()
    {
        $pageSubHeading = 'About';
        $pageHeading = 'Our Team';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Our Team', 'link' => ''],
        ];

        $teamMembers = $this->aboutRepository->getTeamMembersList();

        return view('pages.our-team', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'teamMembers'));

    }

    public function showTestimonialsPage()
    {
        $pageSubHeading = 'About';
        $pageHeading = 'Client Feedbacks';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Testimonials', 'link' => ''],
        ];

        $testimonials = $this->testimonialsRepository->getTestimonials();

        return view('pages.testimonials', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'testimonials'));
    }

    public function showAboutUsPage()
    {
        $pageSubHeading = 'About';
        $pageHeading = 'Explore Thaprobana (Pvt) Ltd.';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'About Us', 'link' => ''],
        ];
        return view('pages.aboutus', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }

    public function showContactUsPage()
    {
        $pageSubHeading = 'About';
        $pageHeading = 'Explore Thaprobana (Pvt) Ltd.';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Testimonials', 'link' => ''],
        ];
        return view('pages.aboutus', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }

    public function showTravelGuidePage()
    {
        $pageSubHeading = 'Tourist Help';
        $pageHeading = 'A Complete Travel Guide of Sri Lanka';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Travel Guide', 'link' => ''],
        ];
        return view('pages.travel-guide', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }

    public function showUsefulLinksPage()
    {
        $pageSubHeading = 'Sri Lanka';
        $pageHeading = 'Useful Links';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Useful Links', 'link' => ''],
        ];
        return view('pages.useful-links', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }

    public function showTransportOptionsPage()
    {
        $transportOptions = $this->homeRepository->getTransportationOptions();
//        dd($transportOptions);

        $typeNames = [
            TransportOptionType::BUS => 'bus',
            TransportOptionType::CAMP4X4 => 'camping 4x4 vehicle',
            TransportOptionType::CAR => 'car',
            TransportOptionType::DOMESTIC_PLANE => 'domestic plane',
            TransportOptionType::SUV => 'suv',
            TransportOptionType::TRAIN => 'train',
            TransportOptionType::VAN => 'van'
        ];

        $pageSubHeading = 'Sri Lanka';
        $pageHeading = 'Transport Options';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Transport Options', 'link' => ''],
        ];
        return view('pages.transport-options', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'transportOptions', 'typeNames'));
    }

    public function showHotelsPage()
    {
        $cityHotels = $this->homeRepository->getHotelsByCities();

//        dd($cityHotels);

        $pageSubHeading = 'Sri Lanka';
        $pageHeading = 'Hotels';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Hotels', 'link' => ''],
        ];
        return view('pages.hotels', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'cityHotels'));
    }
}
