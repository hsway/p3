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

Route::get('/lorem-ipsum/{paragraphs?}', function($paragraphs = '')
{
	return View::make('lorem-ipsum')
		->with('paragraphs', $paragraphs);
});

Route::post('/lorem-ipsum', function()
{
	$paragraphs = Input::get('paragraphs');

	if ($paragraphs == '') {
		return View::make('lorem-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'Enter a value.'
		));
	}

	if (!is_numeric($paragraphs)) {
		return View::make('lorem-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'Input is not numeric.'
		));
	}

	if ($paragraphs <= 0) {
		return View::make('lorem-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'Input cannot be <= 0.'
		));
	}

	if ($paragraphs > 9) {
		return View::make('lorem-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'Input cannot be >9.'
		));
	}

    return View::make('lorem-ipsum-result')
    	->with('paragraphs', $paragraphs);
});

Route::get('/faker/{numUsers?}/{address?}/{birthday?}/{blurb?}', function($numUsers = '', $address = '', $birthday = '', $blurb = '')
{
	return View::make('faker', array(
		'numUsers' => $numUsers,
		'address' => $address,
		'birthday' => $birthday,
		'blurb' => $blurb
	));
});

Route::post('/faker', function()
{
	$numUsers = Input::get('numUsers');
	$address = Input::get('address');
	$birthday = Input::get('birthday');
	$blurb = Input::get('blurb');

	if ($numUsers == '') {
		return View::make('faker-error', array(
			'error' => 'Enter a value.',
			'numUsers' => '',
			'address' => $address,
			'birthday' => $birthday,
			'blurb' => $blurb
		));
	}

	if (!is_numeric($numUsers)) {
		return View::make('faker-error', array(
			'error' => 'Input is not numeric.',
			'numUsers' => '',
			'address' => $address,
			'birthday' => $birthday,
			'blurb' => $blurb
		));
	}

	if ($numUsers <=0) {
		return View::make('faker-error', array(
			'error' => 'Input cannot be <= 0.',
			'numUsers' => '',
			'address' => $address,
			'birthday' => $birthday,
			'blurb' => $blurb
		));
	}

	if ($numUsers > 99) {
		return View::make('faker-error', array(
			'error' => 'Input cannot be >99.',
			'numUsers' => '',
			'address' => $address,
			'birthday' => $birthday,
			'blurb' => $blurb
		));
	}

    return View::make('faker-result', array(
		'numUsers' => $numUsers,
		'address' => $address,
		'birthday' => $birthday,
		'blurb' => $blurb
	));
});