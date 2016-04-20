<?php  
// var_dump($id);	

?>

@extends('layouts.master')

@section('style')
	<style type="text/css">
		img{
			width: 20%;
		}
	</style>
@stop

@section('content')
	
	<h1>some bloooogggy post</h1>
	
	@if(isset($id))
		{{ Form::model($post, ['action' => ['PostsController@update', $post->id] , 'method' => 'PUT', 'files' => true]) }}
	@else
		{{ Form::open(['action' => 'PostsController@store', 'files' => true]) }}
	@endif
	{{ Form::text('title', null ,['placeholder' =>"new blog post title"])}}
	{{$errors->first('title','<p>:message</p>') }}
	{{ Form::textarea('body', null ,['placeholder' =>"create your blog entry - yo!"]) }}
	{{$errors->first('body','<p>:message</p>') }}
	
	
	{{ Form::file('image[]',['multiple']) }}
	{{$errors->first('image','<p>:message</p>') }}

	{{ Form::submit('save') }}
	{{ Form::close() }}

	@if($post->image)
		
		<table>
			<tr>
				<th>image</th>
				<th>action</th>
			</tr>
			@foreach($post->image as $key=>$image)
				<tr>
					<td>{{ $post->showImg($image) }}</td>
					{{ Form::open(['action' => ['PostsController@destroy', $post->id] , 'method'=>'DELETE']) }}
						{{ Form::text('img_num',null,['hidden','value'=> $key]) }}
						<td>{{ Form::submit('delete image',['class'=>'btn btn-danger','name'=>'delete', 'value'=>'d1']) }}</td>
					{{ Form::close() }}
				</tr>
			@endforeach

		</table>

	@endif

@stop 

