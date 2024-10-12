<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    function getAllVehicles()
    {
        $vehicles = Vehicle::all();

        return response()->json($vehicles);
    }
}
