<?php  
// var_dump($);	

?>

@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/twinkle-stars.css">
	<style type="text/css">
		img{
			width: 20%;
		}
	</style>
@stop

@section('twinkle_stars')
	@parent
@stop

@section('content')
	
	<h1>some bloooogggy post</h1>
	
	@if(isset($id))
		{{ Form::model($post, ['action' => ['PostsController@update', $post->id] , 'method' => 'PUT', 'files' => true]) }}
	@else
		{{ Form::open(['action' => 'PostsController@store', 'method' => 'POST' ,'files' => true]) }}
	@endif
	{{ Form::text('title', null ,['placeholder' =>"new blog post title"])}}
	{{$errors->first('title','<p>:message</p>') }}
	{{ Form::textarea('body', null ,['placeholder' =>"create your blog entry - yo!"]) }}
	{{$errors->first('body','<p>:message</p>') }}
	
	
	{{ Form::file('image[]',['multiple']) }}
	{{$errors->first('image','<p>:message</p>') }}

	{{ Form::submit('save') }}

	@if(isset($post)&&$post->image)
		
		<table>
			<tr>
				<th>image</th>
				<th>action</th>
			</tr>
			@foreach($post->image as $key=>$image)
				@if(File::exists(public_path().$post->image_location.$image))
				<tr>
					<td>{{ $post->showImg($image) }}</td>
					<td>{{ Form::submit("$key",['class'=>'btn btn-danger','name'=>'dbag']) }}</td>
				</tr>
				@endif
			@endforeach

		</table>

	@endif
	{{ Form::close() }}

@stop 

