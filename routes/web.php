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


Route::post('/appoitment', 'AppoitmentController@store');

Route::get('/appoitment/showAll', 'AppoitmentController@showAll');

Route::get('/appoitment/showSingle/{id}', 'AppoitmentController@show');

Route::post('/appoitment/update/{id}', 'AppoitmentController@update');

Route::get('/appoitment/destroy/{id}', 'AppoitmentController@destroy');

Route::post('/appoitment/ajaxConfirm', 'AppoitmentController@ajaxConfirm');

Route::get('/service', function () {
    return view('/admin/admin_service');
});

Route::get('/service/search', function () {
    return view('/admin/admin_service-search');
});

Route::get('/serviceautocomplate', 'ServiceController@autocompleteNumberPlates');

Route::Post('/serviceautocomplate', 'ServiceController@autocompleteNumberPlates');

Route::post('/service-search', 'ServiceController@carInServiceOrCreateNewCar');

