<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function ()
{
    $user = Auth::user();
    //dd($user,1);
    if(is_null($user))
    {
        dd($user,2);
        return view('auth.login');
    }
    else
    {
        //dd($user,3);
        if($user->hasRole(['revisor', 'ciudadano']))
        {
            dd($user,4);
            return view('home');
        }
        else
        {
            dd($user,5);
            return view('auth.login');
        }
    }
})->name('home');
