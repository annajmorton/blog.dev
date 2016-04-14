<?php  
// var_dump($id);	

?>

@extends('layouts.master')

@section('content')
	
	<h1>some bloooogggy post</h1>
	
	@if(isset($id))
		{{ Form::model($post, ['action' => ['PostsController@update', $post->id] , 'method' => 'PUT']) }}
	@else
		{{ Form::open(['action' => 'PostsController@store']) }}
	@endif
	{{ Form::text('title', null ,['placeholder' =>"new blog post title"])}}
	{{$errors->first('title','<p>:message</p>') }}
	{{ Form::textarea('body', null ,['placeholder' =>"create your blog entry - yo!"]) }}
	{{$errors->first('body','<p>:message</p>') }}
	{{ Form::submit('save') }}
	{{ Form::close() }}

@stop 

