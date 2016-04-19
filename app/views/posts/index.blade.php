<?php  
	


?>

@extends('layouts.master')

@section('insert_nav')	
	<form method="get" action="{{{ action('PostsController@index') }}}">
		<input id="search" type="search" class="navbar-text navbar-left" name="query" placeholder="search">
	</form>
@stop


@section('content')
	<h1>All the Blogs</h1>
	@foreach ($allPosts as $post)
		
		<a href="{{{ action('PostsController@show', ['id' => $post['attributes']['id']]) }}}"><h3>{{{ $post['attributes']['title'] }}}</h3></a>
		<h3>{{{ $post->user->first_name . " " . $post->user->last_name }}}</h3>

		@if(Auth::check())
			{{ Form::open(['action' => ['PostsController@edit', $post['attributes']['id']] , 'method'=>'GET']) }}
				{{ Form::submit('Edit Post') }}
			{{ Form::close() }}
			{{ Form::open(['action' => ['PostsController@destroy', $post['attributes']['id']] , 'method'=>'DELETE']) }}
				{{ Form::submit('delete',['class'=>'btn btn-danger']) }}
			{{ Form::close() }}
		@endif
		 
	@endforeach 

	@if(Auth::check())
		<form method="GET" action="{{{ action('PostsController@create') }}}">
			<button type="submit">Create a New Post</button>
		</form>
	@endif

	@if(false)
		{{ $allPosts->links() }}
	@endif

@stop

@section('script')
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		"use strict"
		$(document).on('click','.btn-danger',function(event) {

			var is_delete = confirm("are you sure you want to delte this post?");

		});
	    $('#search').keypress(function(e) {    
            if(e.which == 10 || e.which == 13) {
                this.form.submit();
            }
		});

	</script>

@stop