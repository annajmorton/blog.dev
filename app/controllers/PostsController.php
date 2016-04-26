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
		if (Input::has('dbag')) {
			$img_num = Input::get('dbag');
			$file = public_path().$post->image_location.$post->image[$img_num];
			if (File::exists($file)) {
				File::delete($file);
			}
			if (File::exists($file)) {
				Session::flash('errorMessage', "The file was not delete");	
			}
			return Redirect::action('PostsController@edit',$post->id)->withInput();
		}
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
	    	if ($post->image) {
	    		$arr = $post->image;
	    	}

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
		if ($post->image) { 
			$key_check = [];
			foreach ($post->image as $key=>$image) {
		    	$file = public_path().$post->image_location.$image;
			    if (!File::exists($file)) {
					array_push($key_check,$key);
			    }
			}
			$key_check = array_reverse($key_check);
			$arr = $post->image;
			foreach ($key_check as $delete) {
				array_splice($arr, $delete,1);
			}
			$post->image = $arr;
			if (empty($post->image)) {
				$post->image = NULL;
			}
		}

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
