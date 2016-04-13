@extends('layouts.master')

@section('content')
	<h1>this is the portfolio</h1>
	<a href="{{{action('HomeController@showSimon')}}}">Simple Simon Game</a>
	<br>
	<a href="{{{action('HomeController@showWhack')}}}">Whackamole</a>

@stop