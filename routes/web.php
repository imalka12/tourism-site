<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    \TCG\Voyager\Facades\Voyager::routes();
});

# Glide Image Server
Route::middleware('optimizeImages')->group(function () {
    // all images will be optimized automatically
    Route::get('/img/{img}', 'Common\ImageController@show')->where('img', '.*')->name('cdn.image');
});
