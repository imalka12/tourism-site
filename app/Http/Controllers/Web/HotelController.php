<?php

namespace App\Http\Controllers\Web;

use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    function getAllHotels()
    {
        $hotels = Hotel::all();

        return response()->json($hotels);
    }
}
