<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\OfferRepository;

class DiscountOfferController extends Controller
{

    private $offerRepository;

    public function __construct(OfferRepository $offerRepository) {
        $this->offerRepository = $offerRepository;
    }

    public function showDiscountOffersPage(Request $request)
    {
        $pageSubHeading = 'Sri Lanka Holiday';
        $pageHeading = 'Offers';

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Offers', 'link' => ''],
        ];

        $offers = $this->offerRepository->getOffers();

        return view('pages.offers', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'offers'));
    }
}
