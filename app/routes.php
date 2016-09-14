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
if($env == 'local') {
	Debugbar::enable();
} else {
	Debugbar::disable();
}

Route::get('/hajaxs','AjaxsController@hello');
Route::get('/pajaxs','AjaxsController@portfolio');
Route::resource('/posts','PostsController');
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/', 'HomeController@showWelcome');
Route::get('/simon', 'HomeController@SimpleSimon');
Route::get('/whackamole', 'HomeController@Whackygator');
Route::get('/parks','HomeController@showParks');
Route::get('/calculator','HomeController@showCalc');
Route::get('/pv','HomeController@showPV');


Route::get('/login','UsersController@showU');
Route::post('/login','UsersController@login');
Route::get('/logout','UsersController@logout');
Route::get('/test',function(){

	return var_dump(Project::resume());
});

