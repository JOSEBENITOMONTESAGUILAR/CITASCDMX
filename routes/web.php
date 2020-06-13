<?php

Auth::routes();

Route::namespace('Citas')->group(function () {
    Route::get('/', 'CitasController@bienvenida')->name('bienvenida');
    Route::get('registro/{tramite}', 'AgendarController@registro')->name('registro');
    Route::post('horario/{tramite}', 'AgendarController@horario')->name('horario');
});

Route::namespace('Panel')->group(function () {
    Route::get('/home', 'PanelController@home')->name('home');
    Route::get('/listado', 'PanelController@listado')->name('listado');
    Route::get('informacion/{id}', 'PanelController@informacion')->name('informacion');
});

