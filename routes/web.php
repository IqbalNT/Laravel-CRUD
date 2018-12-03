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

Route::get('test','CompanyController@index');
Route::post('addinfo','CompanyController@addinfo');
Route::post('find_info','CompanyController@find_info');
Route::get('view/{id}','CompanyController@view_details');
Route::get('edit/{id}','CompanyController@edit');
Route::post('update','CompanyController@update');
