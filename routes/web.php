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

Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/car', function () {
    return view('frontend.pages.car_compare');
});
Route::get('/test', function () {
    return view('frontend.pages.test');
});
