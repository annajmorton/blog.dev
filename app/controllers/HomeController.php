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

	public function showResume()
	{
		return View::make('resume');
	}

	public function showResTest()
	{
		return View::make('resume2');
	}

	public function rollDice($guess = null)
	{
		$rand_num = mt_rand(1,6);

		$data = [
			'rand_num' => $rand_num,
			'guess' => $guess,

		];

		return View::make('roll-dice')->with($data);
		

	}

	public function showSimon()
	{
		return View::make('simon_index');
	}

	public function showWhack()
	{
		return View::make('whack_index');
	}

	public function showParks()
	{
		return View::make('national_parks');
	}

	public function showCalc()
	{
		return View::make('Build_a_Calculator');
	}

	public function showPV()
	{
		return View::make('pv');
	}
}
