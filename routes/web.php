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

Route::get('/vehicles/{category}/category','VehicleController@displayByCategory' )->name('vehicles.list.by.category');
Route::resource('/vehicles', 'VehicleController');

Route::resource('/customers', 'CustomerController');
