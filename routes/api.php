<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get-tour-types', 'Web\TourTypeController@getAllTourTypes')->name('app.getAllTourTypes');
Route::get('/get-activities', 'Web\ActivityController@getAllActivities')->name('app.getAllActivities');
Route::get('/get-hotels', 'Web\HotelController@getAllHotels')->name('app.getAllHotels');
Route::get('/get-hotels-by-type/{type}', 'Web\HotelController@getHotelsByType')->name('app.getHotelsByType');
Route::get('/get-hotel-rooms', 'Web\HotelRoomController@getHotelRooms')->name('app.getHotelRooms');
Route::get('/get-vehicles', 'Web\VehicleController@getAllVehicles')->name('app.getAllVehicles');
Route::get('/user-itenerary-details', 'Web\CustomizeItineraryController@getUserIteneraryDetails')->name('app.getUserIteneraryDetails');
Route::get('/get-hotel-types', 'Web\HotelController@getHotelTypes')->name('app.getHotelTypes');