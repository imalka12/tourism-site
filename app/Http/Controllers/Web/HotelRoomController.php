<?php

namespace App\Http\Controllers\Web;

use App\Models\HotelRoom;
use App\Http\Controllers\Controller;

class HotelRoomController extends Controller
{
    function getHotelRooms()
    {
        $hotelRooms = HotelRoom::all();

        return response()->json($hotelRooms);
    }
}
