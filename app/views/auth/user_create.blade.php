<?php  
	
?>

@extends('layouts.master')

@section('content')
	

	
	@if(isset($new_user))
	<h1>Welcome new user</h1>
		{{ Form::open(['action' => 'UsersController@login']) }}
		{{ Form::text('first_name', null ,['placeholder' =>"enter first name"])}}
		{{$errors->first('first_name','<p>:message</p>') }}
		{{ Form::text('last_name', null ,['placeholder' =>"enter last name"])}}
		{{$errors->first('last_name','<p>:message</p>') }}
	@else
	<h1>Welcome user</h1>
		{{ Form::open(['action' => 'UsersController@login']) }}
	@endif
	{{ Form::text('email', null ,['placeholder' =>"enter email"])}}
	{{$errors->first('email','<p>:message</p>') }}
	{{ Form::password('password', null ,['placeholder' =>"enter password"]) }}
	{{$errors->first('password','<p>:message</p>') }}
	{{ Form::submit('submit') }}
	{{ Form::close() }}

	<a href="{{{ action('UsersController@login',['new_user'=>true]) }}}">new to the blog? click me to create a new user profile and get blogging</a>


@stop