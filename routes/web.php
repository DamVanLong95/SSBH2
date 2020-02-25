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
use Illuminate\Support\Facades\Storage;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' =>'admin','middleware' => 'auth'],function(){
    Route::get('posts','Admin\PostController@index')->name('posts.index');
    Route::get('datatable','Admin\PostController@getData')->name('posts.getData');
    Route::get('posts/create','Admin\PostController@create')->name('post.create');
    Route::post('posts/store','Admin\PostController@store')->name('post.store');
    Route::get('posts/edit/{id?}','Admin\PostController@edit')->name('post.edit');
    Route::post('posts/update','Admin\PostController@update')->name('post.update');
    Route::post('posts/destroy/{id?}','Admin\PostController@destroy')->name('posts.destroy');
});
Route::get('show', function(){
    $files =  Storage::files('public/avatar');
    dd($files);
    Storage::delete($files);

});
