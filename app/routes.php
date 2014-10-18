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
	$paragraphs = Input::get('paragraphs');

	if (!is_numeric($paragraphs) || $paragraphs == 0) {
		$paragraphs = 1;
	}

    return View::make('lorem-ipsum-result')
    	->with('paragraphs', $paragraphs);
});

Route::get('/faker', function()
{
	return View::make('faker');
});

Route::post('/faker', function()
{
	$numUsers = Input::get('numUsers');

	if (!is_numeric($numUsers) || $numUsers <=0) {
		$numUsers = 1;
	}

	$address = Input::get('address');
	$birthday = Input::get('birthday');
	$blurb = Input::get('blurb');
    return View::make('faker-result', array(
    		'numUsers' => $numUsers,
    		'address' => $address,
    		'birthday' => $birthday,
    		'blurb' => $blurb
    	));
});