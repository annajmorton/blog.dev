@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/resumeR2.css">
@stop

@section('content')
	<h1>portfolio</h1>
	<ul>
		<li><a href="{{{action('HomeController@showSimon')}}}"><h2>simple simon game</h2></a></li>
		<li><a href="{{{action('HomeController@showWhack')}}}"><h2>whackygator</h2></a></li>
		<li><a href="{{{action('HomeController@showCalc')}}}"><h2>calculator</h2></a></li>
	</ul>
		
@stop