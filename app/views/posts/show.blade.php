<?php  

?>

@extends('layouts.master')

@section('content')
		
	<h1>{{{ $post->title }}}</h1>
	<h3>{{{ $post->updated_at }}}</h3>
	<h3>{{{ $post->body }}}</h3>
	
	@if($post->image)
		@foreach($post->image as $image)
			{{ $post->showImg($image) }}
		@endforeach
	@endif
@stop