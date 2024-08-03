<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class SustainableTourismController extends Controller
{
    public function index()
    {
        $pageSubHeading = 'Tours';
        $pageHeading = 'Sustainable Tourism';

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Sustainable Tourism', 'link' => ''],
        ];

        return view('pages.sustainable-tourism', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }
}
