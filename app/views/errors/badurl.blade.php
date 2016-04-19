@extends('layouts.master')

@section('style')
	<style type="text/css">
		body {

			 background-color: black; 
			 color: white;
			 display: flex;
			 justify-content:center;
		}
		#img{

			 height: 80%;
			 background-image: url('/errors/Ryan_Gosling_2_Cannes_2011_(cropped).jpg');
			 background-size: 100%;
			 background-repeat: no-repeat;
			 margin-top: 5em;

		}

	</style>
@stop

@section('navbar')
@stop

@section('content')
	
	<div class="row">
		<div class="col-sm-1 col-md-4"></div>
		<div id="img" class="col-sm-10 col-md-4">
			<h1>Hey Girl, I can't find your page but i think you just found my heart</h1>
		</div>
		<div class="col-sm-1 col-md-4"></div>
	</div>
@stop