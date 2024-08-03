<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class CsrProgramsController extends Controller
{
    public function index()
    {
        $pageSubHeading = 'Tours';
        $pageHeading = 'CSR Programs';

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'CSR Programs', 'link' => ''],
        ];

        return view('pages.csr-programs', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }
}
