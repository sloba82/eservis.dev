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

Route::get('/appoitment/all', 'AppoitmentController@showAll');

Route::get('/appoitment/showById/{id}', 'AppoitmentController@show');

Route::get('/appoitment/edit/{id}', 'AppoitmentController@edit');

Route::get('/appoitment/destroy/{id}', 'AppoitmentController@destroy');