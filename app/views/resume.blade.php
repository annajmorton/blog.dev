<?php 
	
	$guess = mt_rand(1,6);
?>

@extends('layouts.master')

@section('content')
	<h1>here i am resume</h1>
	<a href="{{{ action('HomeController@showPortfolio') }}}">checkout my portfolio</a>
	<br>
	<a href="{{{ action('HomeController@rollDice', $guess) }}}">rolldice</a>
@stop