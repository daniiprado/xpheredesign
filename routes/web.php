<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Index*/
Route::resource('/', 'FrontEndController');
Route::resource('login', 'AuthController');
/*Index Ajax*/
Route::resource('log', 'AuthController@searchUserlog');
Route::resource('register', 'AuthController@registerUser');



/*Redes Sociales*/
Route::get('facebook', 'AuthController@redirectToProvider');
Route::get('facebook/callback', 'AuthController@handleProviderCallback');

/*Admin*/
Route::resource('admin', 'BackEndController');

/*Admin Ajax*/
Route::resource('profile', 'AdmProfileUserController');

Route::resource('alluser', 'AdmAllUserController');
Route::resource('alluser/all', 'AdmAllUserController@show');

Route::resource('adduser', 'AdmAddUserController');

Route::resource('typesusers', 'AdmTypesUserController');
Route::resource('typesuser/all', 'AdmTypesUserController@show');

/*NotFound*/
Route::pattern('NotFound', '.*');
Route::any('/{NotFound}', function(){
 return view('errors.503');
});
