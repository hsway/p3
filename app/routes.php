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
	return View::make('home');
});

Route::get('/lorem-ipsum', function()
{
	return View::make('lorem-ipsum');
});

Route::post('/lorem-ipsum', function()
{
	return 'process the form to generate lorem ipsum';
});

Route::get('/faker', function()
{
	return View::make('faker');
});

Route::post('/faker', function()
{
	return 'process the form to generate random users';
});