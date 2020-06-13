<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function ()
{
    $user = Auth::user();
    if(is_null($user))
    {
        return view('auth.login');
    }
    else
    {
        return view('home');
    }
})->name('home');
