<?php

use Illuminate\Support\Facades\Route;

// pour la homepage: affichage de l'édition et de l'événement en cours
Route::resource('/', 'EditionController')->only('index');

// pour l'affichage des modèles de vélos présents
Route::resource('produit','ProductController')->only('index');

// pour la gestion des badges
Route::resource('/pass', 'BadgeController')->except(['edit','update','destroy']);

// pour l'affichage des vélos disponibles
Route::resource('velo', 'BikeController')->only('index');

// pour la gestion des clients
Route::resource('/client', 'ClientController')->except(['edit','update','destroy']);

// pour la gestion des users
Route::resource('user','UserController')->except(['create','store']);

// pour la gestion des tests
Route::resource('test', 'TestController')->only('index');

//route pour authentification
Route::post('compte','CompteController@connect')->name('compte.connect');
Route::get('compte','CompteController@deconnect')->name('compte.deconnect');
Route::post('inscription','CompteController@store')->name('compte.store');
Route::get('inscription', 'CompteController@create')->name('compte.create');
Route::get('login','CompteController@login')->name('compte.login')->middleware('redirectlogin');
