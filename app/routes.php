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
	return 'my blood hurts';
});

Route::get('/resume', function()
{
	return 'this is my resume';
});

Route::get('/portfolio', function()
{
	return 'this is my portfolio';	
});


Route::get('/rolldice/{guess?}', function($guess = null)
{
	$rand_num = mt_rand(1,6);

	$data = [
		'rand_num' => $rand_num,
		'guess' => $guess,

	];
	return View::make('roll-dice')->with($data);
	

});