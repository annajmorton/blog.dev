@extends('layouts.master')

@section('content')
	
	<form method="POST" action="{{{ action('PostsController@store') }}}">
		<h1>Create a new bbbbBlog:</h1>
		<input type="text" name="title" placeholder="title" value="{{{ Input::old('title') }}}">
		<textarea type="text" name="stuff" placeholder="Body">{{{ Input::old('stuff') }}}</textarea>
		<input type="submit" value="save">
	</form>

@stop 