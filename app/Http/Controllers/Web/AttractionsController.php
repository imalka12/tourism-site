<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AttractionRepository;

class AttractionsController extends Controller
{
    private $attractionRepository;

    public function __construct(AttractionRepository $attractionRepository) {
        $this->attractionRepository = $attractionRepository;
    }

    public function showAttractionsByTypePage(Request $request, $type)
    {
        $attractionType = $this->attractionRepository->getAttractionTypeBySlug($type);
        $attractions = $this->attractionRepository->getAttractionsByAttractionTypeId($attractionType->id);

        $pageSubHeading = 'Sri Lanka';
        $pageHeading = 'Attractions';

        return view('pages.attraction-type', compact('pageHeading', 'pageSubHeading', 'attractions', 'attractionType'));
    }

    public function showAttractionPage(Request $request, $slug)
    {
        $attraction = $this->attractionRepository->getAttractionBySlug($slug);
        $pageSubHeading = 'Sri Lankan Attraction';
        $pageHeading = $attraction->title;

        return view('pages.attraction', compact('pageHeading', 'pageSubHeading', 'attraction'));
    }

}
