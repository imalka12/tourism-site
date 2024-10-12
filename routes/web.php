<?php

use App\Http\Controllers\Common\ImageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', function () {
    return view('welcome');
});

# Glide Image Server
Route::middleware('optimizeImages')->group(function () {
    // all images will be optimized automatically
    Route::get('/img/{img}', [ImageController::class, 'show'])->where('img', '.*')->name('cdn.image');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
