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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' =>'admin'],function(){
    Route::get('posts','Admin\PostController@index')->name('post.index');
    Route::get('posts/create','Admin\PostController@create')->name('post.create');
    Route::post('posts/store','Admin\PostController@store')->name('post.store');
});

