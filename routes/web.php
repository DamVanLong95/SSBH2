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
    return view('frontend.home');
});
Route::get('/car1', function () {
    return view('frontend.pages.car_compare');
});
Route::get('/car','Car\CarController@index');
Route::post('car/droppImage','Car\CarController@droppImage')->name('droppImage');
Route::post('car/detail','Car\CarController@showInfo')->name('show_info');

Route::get('/test', function () {
    return view('frontend.pages.test');
});
// =============================introduction============================

Route::get('/detail', function () {
    return view('frontend.pages.intro_detail');
});
Route::get('/intro', function () {
    return view('frontend.pages.intro');
});
// =====================================blog=================================
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
// =====================================contact=================================
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
// =====================================ưu đãi preferential=================================
Route::get('/treatment', function () {
    return view('frontend.pages.treatment');
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

//   ============View ======================

    Route::get('company','Admin\CompanyController@index')->name('excel.company');
    Route::get('datatables','Admin\CompanyController@getData')->name('excel.getData');
    Route::get('company/edit/{id?}','Admin\CompanyController@edit')->name('company.edit');
    Route::post('company/update/{id?}','Admin\CompanyController@update')->name('company.update');
    Route::post('company/destroy/{id?}','Admin\CompanyController@destroy')->name('company.destroy');
    Route::post('company/store','Admin\CompanyController@store')->name('company.store');

    Route::get('excel/{users}','Admin\ExcelController@importView')->name('excel.users');
    Route::get('summary','Admin\SummaryController@index')->name('excel.summary');

    Route::get('permission','Admin\ExcelController@indexPermission')->name('indexPermission.import');
    Route::get('finance','Admin\ExcelController@indexFinance')->name('indexFinance.import');
    Route::post('users/import','Admin\ExcelController@importExcel')->name('users.import');
   

//   ============Import excel======================

    Route::post('summary/import','Admin\SummaryController@import')->name('summary.import');
    Route::post('permission','Admin\ExcelController@importPermission')->name('permission.import');
    Route::post('finance','Admin\ExcelController@importFinance')->name('finance.import');

//   ============Export excel======================
    Route::get('companies/export','Admin\ExcelController@exportCompany')->name('companies.export');
    Route::get('users/export','Admin\ExcelController@exportExcel')->name('users.export');


});
