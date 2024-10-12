<?php

use App\Http\Controllers\Mobile\OpenAiController;
use App\Http\Controllers\Web\ActivityController;
use App\Http\Controllers\Web\CustomizeItineraryController;
use App\Http\Controllers\Web\HotelController;
use App\Http\Controllers\Web\HotelRoomController;
use App\Http\Controllers\Web\TourTypeController;
use App\Http\Controllers\Web\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-tour-types', [TourTypeController::class, 'getAllTourTypes'])->name('app.getAllTourTypes');
Route::get('/get-activities', [ActivityController::class, 'getAllActivities'])->name('app.getAllActivities');
Route::get('/get-hotels', [HotelController::class, 'getAllHotels'])->name('app.getAllHotels');
Route::get('/get-hotels-by-type/{type}', [HotelController::class, 'getHotelsByType'])->name('app.getHotelsByType');
Route::get('/get-hotel-rooms', [HotelRoomController::class, 'getHotelRooms'])->name('app.getHotelRooms');
Route::get('/get-vehicles', [VehicleController::class, 'getAllVehicles'])->name('app.getAllVehicles');
Route::get('/user-itenerary-details', [CustomizeItineraryController::class, 'getUserIteneraryDetails'])->name('app.getUserIteneraryDetails');
Route::get('/get-hotel-types', [HotelController::class, 'getHotelTypes'])->name('app.getHotelTypes');
Route::post('/generate-itinerary', [OpenAiController::class, 'generateItinerary'])->name('app.generateItinerary');
