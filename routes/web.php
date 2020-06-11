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
        if($user->hasRole(['revisor', 'ciudadano']))
        {
            return view('home');
        }
        else
        {
            return view('auth.login');
        }
    }
})->name('home');

//Route::get('/home', 'HomeController@index')->name('home');
