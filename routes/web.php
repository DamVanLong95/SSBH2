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
Route::post('onchange','Car\CarController@onChange')->name('onchange');
Route::post('reference','Car\CarController@reference')->name('reference');
Route::post('car/address','Car\CarController@address')->name('address');
Route::post('car/filter','Car\CarController@filterCompanies')->name('filterCompanies');

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
// =====================================ưu đãi preferential treatment=================================
Route::get('/treatment', function () {
    return view('frontend.pages.treatment');
});
// =====================================Question=================================
Route::get('/question', function () {
    return view('frontend.pages.question');
});
// =====================================Health=================================
Route::get('/health', function () {
    return view('frontend.pages.health');
});
// =====================================nhân thọ Longevity=================================
Route::get('/longevity','Longevity\LongevityController@index')->name('longevity.index');
Route::post('longevity/droppImage','Longevity\LongevityController@droppImage')->name('droppLongevity');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' =>'admin','middleware' => 'auth'],function(){
    Route::resource('posts','Admin\PostController',['except'=>'show']);
    Route::get('datatable','Admin\PostController@getData')->name('posts.getData');
    Route::resource('product','Admin\ProductController',['except' =>'show']);
    Route::get('getIndex','Admin\ProductController@getIndex')->name('products.datatable');

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
    Route::get('brand','Admin\ExcelController@indexBrand')->name('indexBrand.import');
    Route::get('brand_cate','Admin\ExcelController@indexBrandCate')->name('indexBrandCate.import');
    Route::get('punishment','Admin\ExcelController@indexPunishment')->name('indexPunishment.import');
    Route::get('activity','Admin\ExcelController@indexActivity')->name('indexActivity.import');
    Route::get('location','Admin\ExcelController@indexLocation')->name('indexLocation.import');
    Route::get('detail','Admin\ExcelController@indexDetail')->name('indexDetail.import');
  

    Route::get('scope','Admin\LongevityExcelController@indexScope')->name('indexScope.import');
 
   
   

//   ============Import excel======================

    Route::post('brand_cate/import','Admin\ExcelController@importBrandCate')->name('brand_cate.import');
    Route::post('summary/import','Admin\SummaryController@import')->name('summary.import');
    Route::post('permission','Admin\ExcelController@importPermission')->name('permission.import');
    Route::post('finance','Admin\ExcelController@importFinance')->name('finance.import');
    Route::post('brand','Admin\ExcelController@importBrand')->name('brand.import');
    Route::post('users/import','Admin\ExcelController@importExcel')->name('users.import');
    Route::post('punishment','Admin\ExcelController@importPunishment')->name('punishment.import');
    Route::post('activity','Admin\ExcelController@importActivity')->name('activity.import');
    Route::post('location','Admin\ExcelController@importLocation')->name('location.import');
    Route::post('detail','Admin\ExcelController@importDetail')->name('detail.import');

    Route::post('scope','Admin\LongevityExcelController@importScope')->name('scope.import');


//   ============Export excel======================
    Route::get('companies/export','Admin\ExcelController@exportCompany')->name('companies.export');
    Route::get('users/export','Admin\ExcelController@exportExcel')->name('users.export');
    Route::get('permission/export','Admin\ExcelController@exportPermission')->name('permission.export');
    Route::get('finance/export','Admin\ExcelController@exportFinance')->name('finance.export');
    Route::get('brand/export','Admin\ExcelController@exportBrand')->name('brand.export');
    Route::get('punishment/export','Admin\ExcelController@exportPunishment')->name('punishment.export');
    Route::get('activity/export','Admin\ExcelController@exportActivity')->name('activity.export');
    Route::get('location/export','Admin\ExcelController@exportLocation')->name('location.export');
    Route::get('detail/export','Admin\ExcelController@exportLocation')->name('location.export');
  

    Route::get('longevity/export','Admin\LongevityExcelController@exportLongevity')->name('longevity.export');

});
