<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* Routes AUTENTIFICACION DE SISTEMA */

Route::get('autentificacion', 'ControllerAutentificacion@index');
Route::resource('autentificacion', 'ControllerAutentificacion');

/* Routes PRINCIPAL */

Route::resource('principal', 'ControllerPrincipal');
/* Routes SEDE */

Route::get('sede/principal', 'ControlleriSedesRed@index');



Route::resource('sede','ControlleriSedesRed');
Route::resource('sede/create','ControlleriSedesRed@create');
Route::resource('sede/edit','ControlleriSedesRed@edit');


/* Routes MA USUARIOS */

Route::get('usuarios/principal', 'ControllerMaUsuario@index');
Route::resource('usuario','ControllerMaUsuario');
Route::resource('usuario/create','ControllerMaUsuario@create');
Route::resource('usuario/edit','ControllerMaUsuario@edit');


/* Routes ..... */

Route::auth();

Route::get('/home', 'HomeController@index');
