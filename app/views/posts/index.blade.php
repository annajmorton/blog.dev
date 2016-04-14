<?php 
	

?>
@extends('layouts.master')

@section('content')
	<h1>All the Blogs</h1>
	@foreach ($allPosts as $post)
		
		<h3>{{{ $post['attributes']['title'] }}}</h3>

		{{ Form::open(['action' => ['PostsController@show', $post['attributes']['id']] , 'method'=>'GET']) }}
			{{ Form::submit('View Post') }}
		{{ Form::close() }}
		{{ Form::open(['action' => ['PostsController@edit', $post['attributes']['id']] , 'method'=>'GET']) }}
			{{ Form::submit('Edit Post') }}
		{{ Form::close() }}
		{{ Form::open(['action' => ['PostsController@destroy', $post['attributes']['id']] , 'method'=>'DELETE']) }}
			{{ Form::submit('delete',['class'=>'btn btn-danger']) }}
		{{ Form::close() }}

		 
	@endforeach 


	<form method="GET" action="{{{ action('PostsController@create') }}}">
		<button type="submit">Create a New Post</button>
	</form>

	{{ $allPosts->links() }}

@stop

@section('script')
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		"use strict"
		$(document).on('click','button',function(event) {

			event.preventDefault();
			console.log('working?');
			confirm("are you sure you want to delte this post?");
		});

	</script>

@stop