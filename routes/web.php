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

Route::get('junior', "App\Http\Controllers\JuniorController@Home");
Route::get('junior', "App\Http\Controllers\JuniorController@Home");

Route::get('/itunes', "App\Http\Controllers\ItunesController@Home");


Route::get('/itunes/show/{id}', "App\Http\Controllers\ItunesController@show");


