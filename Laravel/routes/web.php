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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resource('Address', 'AddressController');
// Route::resource('Addresstype', 'AddressController');
// Route::resource('Badge', 'BadgeController');
// Route::resource('Bike', 'BikeController');
// Route::resource('Brand', 'BrandController');
//
// //route pour authentification
Route::post('user','UserController@connect')->name('connect');
Route::get('user','UserController@deconnect')->name('deconnect');
// Route::post('register','UserController@create')->name('create');

Route::resource('/', 'EditionController');

Route::resource('/parametre', 'ClientController');

Route::resource('/listeVelo', 'BikeController');

Route::resource('/pass', 'BadgeController');

// Route::resource('/inscription', 'PersonController');
Route::resource('/compte', 'UserController');

Route::get('/login', function () {
    return view('login');
});

// Route::get('/listeVelo', function () {
//     return view('modelsBike');
// });

// Route::get('/inscription', function () {
//     return view('old/createAccount');
// });

// Route::resource('inscription', 'PersonController');

// Route::get('/reservationPass', function () {
//     return view('reservationPass');
// });

// Route::get('/pass', function () {return view('pass');});//->middleware('auth');
// Route::resource('pass', 'PassController');

// Route::get('/paiement', function () {
//     return view('payementPass');
// });

// Route::get('/creerCompte', function () {
//     return view('createAccount');
// });


Route::get('/veloDispo', function () {
    return view('bikeAvailable');
});

// Route::get('/parametre', function () {
//     return view('paramClient');
// });
// Route::resource('parametre', 'ChatController');//->middleware('auth');

/* routes for the reception */
Route::resource('client', 'Client2Controller');

 Route::get('/listeClients', function () {
     return view('reception/clientsList');
 });

 Route::get('/ajouterClient', function () {
     return view('reception/addClient');
 });

/* routes for the companies */

// Route::get('/commencerTest', function () {
//     return view('companies/startTest');
// });

Route::resource('test', 'TestController');
