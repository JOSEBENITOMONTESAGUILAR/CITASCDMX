<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('fecha/{modulo}/{terminacion?}','ApiController@getFechas')->name('api.fechas');
Route::get('hora/{modulo}/{terminacion?}','ApiController@getHorarios')->name('api.hora');
Route::get('agendar/{dia}/{modulo}/{terminacion?}','ApiController@getCitaFinal')->name('api.fechas');
