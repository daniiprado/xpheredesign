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



/*Redes Sociales*/
Route::get('facebook', 'IndexLoginController@redirectToProvider');
Route::get('facebook/callback', 'IndexLoginController@handleProviderCallback');

/*Admin*/
Route::resource('admin', 'BackEndController');
/*Admin Ajax*/
Route::resource('profile', 'AdmProfileUserController');
Route::resource('alluser', 'AdmAllUserController');
Route::resource('adduser', 'AdmAddUserController');
Route::resource('typesusers', 'AdmTypesUserController');

/*NotFound*/
Route::pattern('NotFound', '.*');
Route::any('/{NotFound}', function(){
 return view('errors.503');
});
