<?php  

?>

@extends('layouts.master')

@section('content')
		
	<h1>{{{ $post['attributes']['title'] }}}</h1>
	<h3>{{{ $post['attributes']['body'] }}}</h3>

@stop