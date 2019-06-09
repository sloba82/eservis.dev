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
Route::post('/appointmentsave', 'AppoitmentController@store');

Route::post('/appoitment/ajaxConfirm', 'AppoitmentController@ajaxConfirm');

Route::resource('/appointment', 'AppoitmentController');

Route::get('/appointment-table/{rezNum}', 'AppoitmentController@resoultPerPage');
Route::post('/appointment-resoultPerPage', 'AppoitmentController@resoultPerPage');

/*Route::middleware(['auth', 'roles:admin'])->group(function () {*/
   /* Route::get('/appoitment/showAll', 'AppoitmentController@showAll');*/
 /*   Route::get('/appoitment/showSingle/{id}', 'AppoitmentController@show');
    Route::post('/appoitment/update/{id}', 'AppoitmentController@update');
    Route::get('/appoitment/destroy/{id}', 'AppoitmentController@destroy');
    Route::post('/appoitment/ajaxConfirm', 'AppoitmentController@ajaxConfirm');*/

  /*  Route::resource('/appoitment', 'AppoitmentController');*/



/*});*/

Route::middleware(['auth', 'roles:admin,serviceman' ])->group(function () {
    Route::get('/service', function () {
        return view('/admin/admin_service');
    });
    Route::post('/service-addcar', 'ServiceController@serviceCarAdd');
    Route::get('/service/search', function () {
        return view('/admin/admin_service-search');
    });
    Route::post('/serviceautocomplate', 'ServiceController@autocompleteNumberPlates');
    Route::post('/service-search', 'ServiceController@carInServiceOrCreateNewCar');

    Route::get('/service-editcar/{id}', 'ServiceController@serviceCarEdit' );


});


Route::get('/card-reader/{data}', 'CardReaderController@getCardReader');
Route::post('/sendCarToService', 'CardReaderController@sendCarToService');



