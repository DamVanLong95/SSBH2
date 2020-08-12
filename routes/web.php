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
// Route::view('/test','layouts.test');
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/car1', function () {
    return view('frontend.pages.test');
});
Route::get('/car','Car\CarController@index');
Route::post('car/droppImage','Car\CarController@droppImage')->name('droppImage');
Route::post('car/detail','Car\CarController@showInfo')->name('show_info');
Route::post('onchange','Car\CarController@onChange')->name('onchange');
Route::post('reference','Car\CarController@reference')->name('reference');
Route::post('car/address','Car\CarController@address')->name('address');
Route::post('car/filter','Car\CarController@filterCompanies')->name('filterCompanies');
Route::post('car/purpose','Car\CarController@purpose')->name('purpose');

Route::post('car/checkImage','Car\CarController@checkImage')->name('checkImage');

Route::get('/test', function () {
    return view('frontend.pages.test');
});
// =============================introduction============================

// Route::get('/detail', function () {
//     return view('frontend.pages.intro_detail');
// });
Route::view('/intro','frontend.pages.intro');
Route::view('/detail','frontend.pages.intro_detail');
Route::view('/reason','frontend.pages.reason');
Route::view('/principle','frontend.pages.principal');
Route::view('/term','frontend.pages.term');
// =====================================blog=================================
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/blog2', function () {
    return view('frontend.pages.blog2');
});
Route::get('/blog3', function () {
    return view('frontend.pages.blog3');
});
Route::get('/blog4', function () {
    return view('frontend.pages.blog4');
});
// =====================================contact=================================
Route::view('/contact','frontend.pages.contact');
// =====================================ưu đãi preferential treatment=================================
Route::get('/treatment', 'HController@treatments');
// =====================================Question=================================
Route::view('/question','frontend.pages.question');
// =====================================Health=================================
Route::get('/health','Health\HealthController@index')->name('health.index');
Route::post('health/droppImage','Health\HealthController@droppImage')->name('droppHealth');
Route::post('health/selectProgram','Health\HealthController@selectProgram')->name('selectProgram');
Route::post('health/filterProvince','Health\HealthController@filterProvince')->name('filterProvince');
Route::post('health/filterDistrict','Health\HealthController@filterDistrict')->name('filterDistrict');
Route::post('health/filter','Health\HealthController@filterHealth')->name('filterHealth');
Route::post('health/checkImage','Health\HealthController@checkImage')->name('checkHealth');
// =====================================nhân thọ Longevity=================================
Route::get('/longevity','Longevity\LongevityController@index')->name('longevity.index');
Route::post('longevity/droppImage','Longevity\LongevityController@droppImage')->name('droppLongevity');
Route::post('longevity/filter','Longevity\LongevityController@filterBanner')->name('filterLongevity');
Route::post('longevity/popup','Longevity\LongevityController@displayPopup')->name('popupLongevity');
Route::post('longevity/showProduct','Longevity\LongevityController@showProduct')->name('showProduct');
Route::post('longevity/checkImg','Longevity\LongevityController@checkImg')->name('checkLongevity');
Route::post('longevity/showData','Longevity\LongevityController@showData')->name('sick_longevity.show');
Route::post('longevity/sick','Longevity\LongevityController@sickShow')->name('longevity.sick');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' =>'admin','middleware' => 'auth'],function(){

    //==========================Treatment=============================================

    Route::get('treatment/list','Admin\TreatmentController@index')->name('treatment.index');
    Route::get('treatment/data','Admin\TreatmentController@listData')->name('treatment.datatable');
    Route::get('treatment','Admin\TreatmentController@create')->name('treatment.create');
    Route::get('treatment/edit/{id?}','Admin\TreatmentController@edit')->name('treatment.edit');
    Route::post('treatment/update/{id?}','Admin\TreatmentController@update')->name('treatment.update');
    Route::post('treatment/post','Admin\TreatmentController@store')->name('treatment.store');
    Route::resource('posts','Admin\PostController',['except'=>'show']);
    Route::get('datatable','Admin\PostController@getData')->name('posts.getData');
    Route::resource('product','Admin\ProductController',['except' =>'show']);
    Route::get('getIndex','Admin\ProductController@getIndex')->name('products.datatable');
    Route::resource('product_longevity','Admin\ProductLongevityController',['except' =>'show']);
    Route::get('getData','Admin\ProductLongevityController@getData')->name('product_longevity.datatable');

    
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
    Route::get('program','Admin\ProgramExcelController@index')->name('indexProgram.import');
    Route::get('health','Admin\HealthExcelController@index')->name('indexHealth.import');
    Route::get('district','Admin\DistrictExcelController@index')->name('indexDistrict.import');
    Route::get('hospital','Admin\HospitalExcelController@index')->name('indexHospital.import');
    Route::get('exclusion','Admin\ExclusionExcelController@index')->name('indexExclusion.import');
    //===============================Danh sach benh======
    Route::get('sickList','Admin\SickListController@index')->name('sick_longevity.index');
    Route::post('sickList/import', 'Admin\SickListController@import')->name('sick_longevity.import');
    //================== Danh sach SPBT==================
    Route::get('benifits','Admin\BenifitController@index')->name('benifit_longevity.index');
    Route::post('benifits/import','Admin\BenifitController@import')->name('benifit_longevity.import');
   

 
   
   

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
    Route::post('program','Admin\ProgramExcelController@import')->name('program.import');
    Route::post('health','Admin\HealthExcelController@import')->name('health.import');
    Route::post('district','Admin\DistrictExcelController@import')->name('district.import');
    Route::post('hospital','Admin\HospitalExcelController@import')->name('hospital.import');
    Route::post('exclusion','Admin\ExclusionExcelController@import')->name('exclusion.import');

    Route::get('anyData','Admin\ProgramExcelController@anyData')->name('program.data');
    // Route::resource('program','Admin\ProgramExcelController', ['except' => ['create', 'show']]);
    Route::get('program/edit/{id?}','Admin\ProgramExcelController@edit')->name('program.edit');
    Route::post('program/update/{id?}','Admin\ProgramExcelController@update')->name('program.update');


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
