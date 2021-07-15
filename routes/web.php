<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

});

Route::group(['prefix' => 'tourist', 'namespace' => 'App\Http\Controllers\Tourist'], function()
{
    Route::get('/','TouristController@index')->name('tourist.index');
    Route::get('/home','TouristController@home')->name('tourist.home');
    Route::get('/weather/{id?}','TouristController@weather')->name('tourist.weather');
    Route::get('/venue/{id?}','TouristController@getVenueDetails')->name('tourist.venue');
});

