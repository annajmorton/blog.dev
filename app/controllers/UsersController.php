<?php 

class UsersController extends BaseController 
{
	public function showU()
	{
		if (Input::has('new_user')) {

			return View::make('auth.user_create')->with('new_user',Input::get('new_user'));	
		}
		return View::make('auth.user_create');
	}

	public function login() 
	{

		if (Input::has('first_name')) {
			$user = new User();
			$this->makeNewUser($user);
		}

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
	public function makeNewUser($user)
	{
		$validator = Validator::make(Input::all(), User::$rules);
	    if ($validator->fails()) {

	        Session::flash('errorMessage', "uh oh! we weren't able to save <em><strong>$post->title</strong></em>");
	        return Redirect::back()->withInput()->withErrors($validator);

	    }
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->profile_img = '';
		$user->role_id = 3;	
	    Log::info("HEY BABY! I\'ve sent the following to the db: $user->email");
		$user->save();
	}

}