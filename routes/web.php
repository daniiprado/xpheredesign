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
Route::resource('/', 'FrontEndController'); /* Direcciona pagina principal */
Route::resource('login', 'AuthController'); /* Direcciona pagina principal/inicio de sesion */
Route::resource('logout', 'AuthController@logout'); /* Direcciona pagina principal/inicio de sesion */
/*Index Ajax*/
Route::post('log', 'AuthController@searchUserlog'); /* Inicio de sesion */
Route::post('register', 'AuthController@registerUser'); /* Resgistro usuario desde pagina principal */
/*Redes Sociales*/
Route::get('facebook', 'AuthController@redirectToProvider'); /* Inicio de sesion facebook */
Route::get('facebook/callback', 'AuthController@handleProviderCallback'); /* Inicio de sesion facebook */


/*Admin*/
Route::resource('admin', 'BackEndController'); /* Direcciona pagina admin */
/*Admin Ajax*/
Route::resource('profile', 'AdmProfileUserController'); /* Direcciona pagina admin/usuario/perfil */
Route::get('profile/all', 'AdmProfileUserController@show'); /* Direcciona pagina admin/usuario/perfil */
Route::post('profile/update/{id}', 'AdmProfileUserController@update'); /* Direcciona pagina admin/usuario/perfil */
/*Route::post('profile/updateImage/{id}', 'AdmProfileUserController@updateImg'); /* Sube imagen automaticamente*/
Route::post('profile/updatePass/{id}', 'AdmProfileUserController@updatePass'); /* Direcciona pagina admin/usuario/perfil */
Route::post('profile/veriPass/{id}', 'AdmProfileUserController@veriPass'); /* Direcciona pagina admin/usuario/perfil */

Route::resource('alluser', 'AdmAllUserController'); /* Direcciona pagina admin/usuario/todos los usuarios */
Route::get('alluser/all', 'AdmAllUserController@show'); /* Direcciona pagina admin/usuario/todos los usuarios, muestra todos los usuarios*/
Route::get('edituser/{id}', 'AdmAllUserController@edit'); /*Direciona vista de  Modificar usuario*/
Route::post('updateuser/{id}', 'AdmAllUserController@update'); /*Direciona vista de  Modificar usuario*/
Route::delete('deleteuser/{id}', 'AdmAllUserController@destroy'); /*Eliminar usuario*/

Route::resource('adduser', 'AdmAddUserController'); /* Direcciona pagina admin/usuario/agregar nuevo*/
Route::post('adduser/register', 'AdmAddUserController@store'); /* Registra nueva usuario*/
Route::get('typeuser', 'AdmAddUserController@showType'); /* Consulta los tipos de usuario*/

Route::resource('typesusers', 'AdmTypesUserController'); /* Direcciona pagina admin/usuario/todos los usuarios*/
Route::get('typesuser/all', 'AdmTypesUserController@show'); /*Muestra todos los usuarios*/

Route::resource('allentries', 'AdmAllEntriesController'); /* Direcciona pagina admin/usuario/todos los usuarios*/

Route::resource('addentries', 'AdmAddEntriesController'); /* Direcciona pagina admin/usuario/todos los usuarios*/
Route::get('categoryEntries', 'AdmAddEntriesController@showCategory'); /* Carga las categorias del blog*/
Route::get('privateEntries', 'AdmAddEntriesController@showPrivate'); /* Carga la privacidad del blog*/
Route::get('stateEntries', 'AdmAddEntriesController@showState'); /* Carga el estado del blog*/

/*NotFound*/
Route::pattern('NotFound', '.*');
Route::any('/{NotFound}', function(){
 return view('errors.503');
});
