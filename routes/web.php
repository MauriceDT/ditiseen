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


//_________________________________________Home___//
Route::get('/', function () {
    return view('home');
});

Route::get('/eerste', function () {
    return view('eerste');
});



//_________________________________________JS Pages___//
Route::get('/js_one', function () {
    return view('js_one');
});
Route::get('/js_two', function () {
    return view('js_two');
});
