<?php 

class UsersController extends BaseController 
{
	public function showU()
	{

		return View::make('auth.user_create');
	}

	public function login() 
	{

		$validator = Validator::make(Input::all(), User::$rules);
		
		if ($validator->fails()) {

			Session::flash('errorMessage', "we couldn't log you in!");
	        return Redirect::back()->withInput()->withErrors($validator);
		}

		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', "Your email or password does not match our files");
		    return Redirect::back()->withInput();
		}
	}


	public function logout()
	{

		Auth::logout();
		return Redirect::action('HomeController@showWelcome');
	}

}