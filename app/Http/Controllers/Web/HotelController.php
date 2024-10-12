<?php

namespace App\Http\Controllers\Web;

use App\Http\Resources\HotelTypeResource;
use App\Models\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HotelController extends Controller
{
    function getAllHotels(): AnonymousResourceCollection
    {
        $hotels = Hotel::all();
        return HotelResource::collection($hotels);
    }

    function getHotelsByType($type): AnonymousResourceCollection
    {

        $hotels = Hotel::where('hotel_type', $type)->get();
        return HotelResource::collection($hotels);
    }

    function getHotelTypes()
    {
        $list = Hotel::select('hotel_type')->distinct()->pluck('hotel_type');

        // convert to associative array with type as key and title case type as value without underscores
        $types = [];
        foreach ($list as $type) {
            $types[$type] = ucwords(str_replace('_', ' ', $type));
        }

        return response()->json($types);
    }
}
