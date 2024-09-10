<?php

namespace App\Http\Controllers\Web;

use App\HotelRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    function getHotelRooms()
    {
        $hotelRooms = HotelRoom::all();

        return response()->json($hotelRooms);
    }
}
