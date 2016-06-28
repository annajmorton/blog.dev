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

Route::resource('/posts','PostsController');
Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/rolldice/{guess?}', 'HomeController@rollDice');
Route::get('/', 'HomeController@showWelcome');
Route::get('/simon', 'HomeController@showSimon');
Route::get('/whackamole', 'HomeController@showWhack');
Route::get('/parks','HomeController@showParks');
Route::get('/calculator','HomeController@showCalc');
Route::get('/pv','HomeController@showPV');

Route::get('/login','UsersController@showU');
Route::post('/login','UsersController@login');
Route::get('/logout','UsersController@logout');

Route::get('/test', function() 
{
    $response = Response::make('Bond, James Bond.', 200);
    $response->setTtl(60);
    return $response;

});

Route::get('/book', function()
{
	return View::make('bible');

});

Route::get('/svg', function()
{
	return View::make('svg');

});

Route::get('my-posts', function() {

	$user = User::first();

	foreach($user->posts as $post){
		echo "Title is: $post->title" . "<br>";
		echo "Body is: $post->body" . "<br>";
	}

});

