<?php 
	
	$guess = mt_rand(1,6);
?>

@extends('layouts.master')
@section('style')
	<link rel="stylesheet" type="text/css" href="/css/resumeR2.css">
	<style type="text/css">
		img{

			width: 50%;
		}
	</style>

@stop

@section('content')
	<h1>here i am resume</h1>
	<div id="image">
		<img src="/img/Resume.png">
	</div>
@stop