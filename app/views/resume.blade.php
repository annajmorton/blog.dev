<?php 
	
	$guess = mt_rand(1,6);
?>

@extends('layouts.master')
@section('style')
	<link rel="stylesheet" type="text/css" href="/css/resumeR2.css">
	<style type="text/css">
		img{
			width: 100%;	
		}
		#image{
			display: flex;
			justify-content:center;
		}
	</style>

@stop

@section('content')
	<div id="image">
		<img src="/img/Resume.png">
	</div>
@stop