<?php 
	
	$pass = null;
	var_dump($allPosts);

?>
@extends('layouts.master')

@section('content')
	<h1>All the Blogs</h1>
	<form method="GET" action="{{{ action('PostsController@create') }}}">
		<button type="submit">Create a New Post</button>
	</form>
@stop