<?php

namespace App\Http\Controllers\Web;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelCollectionResource;
use App\Http\Resources\HotelResource;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    function getAllHotels()
    {
        $hotels = Hotel::all();
        // ->except('location');

        return HotelResource::collection($hotels);
    }

    function getHotelsByType($type) {

        $hotels = Hotel::where('hotel_type', $type)->get();

        return HotelResource::collection($hotels);
    }

    function getHotelTypes() {
        $list = Hotel::select('hotel_type')->distinct()->pluck('hotel_type');

        return response()->json($list);
    }
}
