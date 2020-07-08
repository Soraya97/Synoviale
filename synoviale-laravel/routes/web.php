<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'EditionController');

Route::resource('produit','ProductController');

Route::resource('/pass', 'BadgeController');

Route::resource('velo', 'BikeController');

Route::resource('/client', 'ClientController');

//pour la gestion des users
Route::resource('user','UserController');

Route::resource('test', 'TestController');

//route pour authentification
Route::post('compte','CompteController@connect')->name('compte.connect');
Route::get('compte','CompteController@deconnect')->name('compte.deconnect');
Route::post('inscription','CompteController@store')->name('compte.store');
Route::get('inscription', 'CompteController@create')->name('compte.create');
Route::get('login','CompteController@login')->name('compte.login')->middleware('redirectlogin');


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resource('Address', 'AddressController');
// Route::resource('Addresstype', 'AddressController');
// Route::resource('Badge', 'BadgeController');
// Route::resource('Bike', 'BikeController');
// Route::resource('Brand', 'BrandController');
//






// route for the reception


 // Route::get('/listeClients', function () {
 //     return view('reception/clientsList');
 // });
 //
 // Route::get('/ajouterClient', function () {
 //     return view('reception/addClient');
 // });



// Route::resource('/inscription', 'PersonController');
// Route::resource('/compte', 'UserController');

// Route::get('/login', function () {
//     return view('login');
// })->middleware('redirectlogin');

// Route::get('/listeVelo', function () {
//     return view('modelsBike');
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


// Route::get('/veloDispo', function () {
//     return view('bikeAvailable');
// });

// Route::get('/parametre', function () {
//     return view('paramClient');
// });
// Route::resource('parametre', 'ChatController');//->middleware('auth');

/* routes for the reception */
// Route::resource('client', 'Client2Controller');


/* routes for the companies */

// Route::get('/commencerTest', function () {
//     return view('companies/startTest');
// });
