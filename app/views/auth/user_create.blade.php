@extends('layouts.master')

@section('content')
	
	<h1>Welcome user</h1>

	
	@if(false)
		{{ Form::open(['action' => 'UsersController@login']) }}
		{{ Form::text('first_name', null ,['placeholder' =>"enter first name"])}}
		{{$errors->first('first_name','<p>:message</p>') }}
		{{ Form::text('last_name', null ,['placeholder' =>"enter last name"])}}
		{{$errors->first('last_name','<p>:message</p>') }}
	@else
		{{ Form::open(['action' => 'UsersController@login']) }}
	@endif
	{{ Form::text('email', null ,['placeholder' =>"enter email"])}}
	{{$errors->first('email','<p>:message</p>') }}
	{{ Form::password('password', null ,['placeholder' =>"enter password"]) }}
	{{$errors->first('password','<p>:message</p>') }}
	{{ Form::submit('submit') }}
	{{ Form::close() }}

	email
	password


@stop