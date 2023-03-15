<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

// Flight
Route::get('/flights', 'App\Http\Controllers\FlightController@index')->name('flight.index');

Route::get('/flights/create', 'App\Http\Controllers\FlightController@create')->name('flight.create');

Route::get('/flights/statistics', 'App\Http\Controllers\FlightController@statistics')->name('flight.statistics');

Route::get('/flights/{id}', 'App\Http\Controllers\FlightController@show')->name('flight.show');

Route::post('/flights/save', 'App\Http\Controllers\FlightController@save')->name('flight.save');

Route::delete('/flights/destroy/{id}', 'App\Http\Controllers\FlightController@destroy')->name('flight.destroy');