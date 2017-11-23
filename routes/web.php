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

Route::get('/home', 'Fecha_FinalesController@index')->name('home');

Route::get('/admin/fecha_Finales', 'Fecha_FinalesController@index'); //listado
Route::get('/admin/fecha_Finales/create', 'Fecha_FinalesController@create'); //formulario
Route::post('/admin/fecha_Finales', 'Fecha_FinalesController@store'); //registrar

Route::post('/admin/fecha_Finales/import', 'Fecha_FinalesController@import'); //registrar import

Route::get('/admin/fecha_Finales/{id}/edit', 'Fecha_FinalesController@edit');
Route::post('/admin/fecha_Finales/{id}/edit', 'Fecha_FinalesController@update');
Route::post('/admin/fecha_Finales/{id}/delete', 'Fecha_FinalesController@destroy');
