<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$allPosts = Post::paginate(4);
		return View::make('posts.index')->with('allPosts',$allPosts);
		// return Post::all(); this returns a jason!
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
		$post = Post::find($id);
		return View::make('posts.show')->with('post',$post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		$args = [
			'id' => $id,
			'post' => $post
		];
		// return Redirect::action('PostsController@create')->with('id',$id);
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
		if ($post) {
			$post->delete();
		}
		return Redirect::action('PostsController@index');
	}

	private function saveToDB($post) 
	{
		$validator = Validator::make(Input::all(), Post::$rules);

	    
	    if ($validator->fails()) {
	        
	        return Redirect::back()->withInput()->withErrors($validator);

	    }

	    $post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
	 
		return Redirect::action('PostsController@index'); 
	}


}
