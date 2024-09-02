<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ItineraryRepository;
use App\TourType;

class TourTypeController extends Controller
{
    protected $itineraryRepository;

    public function __construct(ItineraryRepository $itineraryRepository)
    {
        $this->itineraryRepository = $itineraryRepository;
    }

    public function index()
    {
        $pageSubHeading = 'Our Tour Types';
        $pageHeading = 'Tour Types';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],            ['title' => 'Tour Types', 'link' => ''],
        ];


        $tourTypes = $this->itineraryRepository->getTourTypesList();

        return view('pages.tour-types', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'tourTypes'));
    }

    public function show($slug)
    {

    }

    function getAllTourTypes() {
        $tourTypes = TourType::all();

        return response()->json(['data', $tourTypes]);
    }
}
