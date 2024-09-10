<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    function getAllVehicles()
    {
        $vehicles = Vehicle::all();

        return response()->json($vehicles);
    }
}
