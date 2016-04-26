@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/resumeR2.css">
@stop

@section('content')
	<h1>portfolio</h1>
	<ul>
		<li><a href="{{{action('HomeController@showSimon')}}}">Simple Simon Game</a></li>
		<li><a href="{{{action('HomeController@showWhack')}}}">WhackyGator</a></li>
		<li><a href="{{{action('HomeController@showCalc')}}}">Calculator</a></li>
	</ul>
		
@stop