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



//_________________________________________JS_Pages___//
Route::get('/js-one', function () {
    return view('pages/js-one');
});
Route::get('/js-two', function () {
    return view('pages/js-two');
});

//_________________________________________Vue_Pages___//
Route::get('/vue-one', function () {
    return view('pages/vue-one');
});
