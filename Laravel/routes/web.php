<?php

use Illuminate\Support\Facades\Route;

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


Route::resource('Address', 'AddressController');
Route::resource('Addresstype', 'AddressController');
Route::resource('Badge', 'BadgeController');
Route::resource('Bike', 'BikeController');
Route::resource('Brand', 'BrandController');

//route pour authentification
Route::post('user','UserController@connect')->name('connect');
Route::get('user','UserController@deconnect')->name('deconnect');
Route::post('register','UserController@create')->name('create');