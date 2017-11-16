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

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/fecha_Finales', 'Fecha_FinalesController@index'); //listado
Route::get('/admin/fecha_Finales/create', 'Fecha_FinalesController@create'); //formulario
Route::post('/admin/fecha_Finales', 'Fecha_FinalesController@store'); //registrar
Route::get('/admin/fecha_Finales/{id}/edit', 'Fecha_FinalesController@edit'); //formulario
Route::post('/admin/fecha_Finales/{id}/edit', 'Fecha_FinalesController@update'); //actualizar

Route::get('/admin/Persona', 'PersonaController@index'); //listado
Route::get('/admin/Persona/create', 'PersonaController@create'); //formulario
Route::post('/admin/Persona', 'PersonaController@store'); //registrar
Route::get('/admin/Persona/{id}/edit', 'PersonaController@edit'); //formulario
Route::post('/admin/Persona/{id}/edit', 'PersonaController@update'); //actualizar


