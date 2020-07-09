<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'EditionController')->only('index');

Route::resource('produit','ProductController')->only('index');

Route::resource('/pass', 'BadgeController')->except(['edit','update','destroy']);

Route::resource('velo', 'BikeController')->only('index');

Route::resource('/client', 'ClientController')->except(['edit','update','destroy']);

//pour la gestion des users
Route::resource('user','UserController')->except(['create','store']);

Route::resource('test', 'TestController')->only('index');

//route pour authentification
Route::post('compte','CompteController@connect')->name('compte.connect');
Route::get('compte','CompteController@deconnect')->name('compte.deconnect');
Route::post('inscription','CompteController@store')->name('compte.store');
Route::get('inscription', 'CompteController@create')->name('compte.create');
Route::get('login','CompteController@login')->name('compte.login')->middleware('redirectlogin');
