<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showPortfolio()
	{
		return View::make('flipbook');
	}

	public function showSimon()
	{
		return View::make('projects.simon_index');
	}

	public function showWhack()
	{
		return View::make('projects.whack_index');
	}

	public function showParks()
	{
		return View::make('projects.national_parks');
	}

	public function showCalc()
	{
		return View::make('projects.Build_a_Calculator');
	}

	public function showPV()
	{
		return View::make('projects.pv');
	}
}
