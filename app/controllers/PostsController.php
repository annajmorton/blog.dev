<?php

class PostsController extends BaseController 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	// public function beforefilter

	
	public function __construct()
	{
	    // allows only logged-in users to modify the db
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	public function index()
	{
		if (Input::has('query')) {	
			$query = Input::get('query');
			$posts = Post::with('User')->orderBy('updated_at')->where('title', 'LIKE', "%$query%")->orWhere('body', 'LIKE', "%$query%")->get();
		} else {

			$posts = Post::with('User')->get();
			
		}

		return View::make('posts.index')->with('allPosts',$posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
	 	return $this->saveToDB($post); 
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->findcheckpost($id);

		$pass = [
			'post' => $post
		];
		return View::make('posts.show')->with($pass);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$post = $this->findcheckpost($id);
		$args = [
			'id' => $id,
			'post' => $post
		];
		return View::make('posts.create')->with($args);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		$post = Post::find($id);
		return $this->saveToDB($post); 
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$name = $post->title;

		if ($post->image) {
			dd(Input::get());
			$file = public_path().$post->image_location.$post->image;

			if (File::exists($file)) {
				File::delete($file);
				$post->image = null;
			}
			if (File::exists($file)) {
				Session::flash('errorMessage', "The file was not delete");	
			}

			return Redirect::back()->withInput();

		}
		if ($post) {
			$post->delete();
			Session::flash('successMessage', "$name is sucessfully removed from all memory!");
			
		} else {
			Session::flash('errorMessage', "Something happened - $name is still here!");
		}

		return Redirect::action('PostsController@index');
	}


	private function saveToDB($post) 
	{
		$validator = Validator::make(Input::all(), Post::$rules);
	    $post->title = Input::get('title');
		$post->body = Input::get('body');
		
		
			
	    Log::info("HEY BABY! I\'ve sent the following to the db: $post->title and $post->body");
	    if ($validator->fails()) {

	        Session::flash('errorMessage', "uh oh! we weren't able to save <em><strong>$post->title</strong></em>");
	        return Redirect::back()->withInput()->withErrors($validator);

	    }
	    if(Input::hasFile('image')){
	  
	    	$files = Input::file('image');
	    	$arr = [];

			foreach ($files as $file) {
		    	if (!$file->isValid()) {
			    	Session::flash('errorMessage', "file is not valid! we did not save the entry");
			    	return Redirect::back()->withInput()->withErrors($validator);
		    	}
				$filename = uniqid();
				$filetype = $file->getMimeType();
				$filename = $filename . '.' . explode('/',$filetype)[1];
				$file->move(public_path().$post->image_location,$filename);
				array_push($arr,$filename);
			}	

			$post->image = $arr;
	    } 

		// if ($post->image) { 
		// 	foreach ($post->image as &$file) {
		//     	$file = public_path().$post->image_location.$post->image;
		// 	    if (!File::exists($file)) {
		// 			$file = null;
		// 	    }
		// 	}
		// }

	    $post->user_id = User::first()->id;
		$post->save();
	 	Session::flash('successMessage', "Your day has come! <em><strong>$post->title</strong></em> is sucessfully saved");
		return Redirect::action('PostsController@index'); 
	}

	private function findcheckpost($id)
	{
		$post = Post::find($id);
		
		if (!$post) {
			
			App::abort(404);
		}

		return $post;
	}


}
