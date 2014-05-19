<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Route::controller('/', 'HomeController');

Route::get('about', function()
{
    return View::make('about');
});

Route::get('users', function()
{
    $users = User::all();
    
    return View::make('users')->with('users', $users);
});

