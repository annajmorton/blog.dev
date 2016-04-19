@extends('layouts.master')

@section('content')
	<h1>this is the portfolio</h1>
	<a href="{{{action('HomeController@showSimon')}}}">Simple Simon Game</a>
	<br>
	<a href="{{{action('HomeController@showWhack')}}}">Whackamole</a>
	<br>
	<a href="{{{action('HomeController@showParks')}}}">Parks</a>
	<a href="{{{action('HomeController@showCalc')}}}">Calculator</a>
	<a href="{{{action('HomeController@showPV')}}}">API Sample</a>

@stop