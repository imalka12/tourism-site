<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomizeItineraryController extends Controller
{
    function getUserIteneraryDetails(Request $request) {
        $data = $request->validate([
            'firstName' => 'required',
            'lastName' => 'nullable',
            'numberOfAdults' => 'required|numeric',
            'numberOfChildren' => 'required|numeric',
            'country' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'image' => 'nullable',
            'budget' => 'required',
            'totalDays' => 'required|numeric',
            'start' => 'required',
            'end' => 'required',
        ]);

        // activity ->
        // id
        // title
        // image
        // activeStatus
        // slug

        // tour type ->
        // id 
        // title
        // image
        // typeKey
        // slug

        // rooms ->
        // roomType
        // mealType
        // numberOfRooms


        // hotels ->
        // hotelId
        // name
        // description
        // statRating
        // image


        // vehicles ->
        // title
        // make
        // model
        // yom
        // trim
        // transmission
        // fuel
        // numberOfSeats
        // pricePerKm


        // CustomizeItinerary::create($data);
    }
}
