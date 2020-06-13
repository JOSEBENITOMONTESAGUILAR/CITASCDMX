<?php

Auth::routes();

Route::namespace('Citas')->group(function () {
    Route::get('/', 'CitasController@bienvenida')->name('bienvenida');
    Route::get('registro', 'AgendarController@registro')->name('registro');
});

Route::namespace('Panel')->group(function () {
    Route::get('/home', 'PanelController@home')->name('home');
    Route::get('/listado', 'PanelController@listado')->name('listado');
});

