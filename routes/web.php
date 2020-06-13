<?php

Route::view('/', 'citas.bienvenida')->name('bienvenida');

Auth::routes();

Route::namespace('Panel')->group(function () {
    Route::get('/home', 'PanelController@home')->name('home');
    Route::get('/listado', 'PanelController@listado')->name('listado');
});

