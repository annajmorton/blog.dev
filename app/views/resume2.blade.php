<?php  
$thegoods = file_get_contents("resume.csv");
$thegoods = str_replace(PHP_EOL, '\n', $thegoods);

?>

@extends('layouts.master')
@section('content')
	<section class='resume'>
	
		<div class="row space" >
			<div class="col-md-2"></div>
			<div class="col-md-8" style="background-color:grey;height:10px"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row rdetail">
			<div class='col-md-2'>
				</div>
			<div class='col-md-2'><h4>val</h4></div>
			<div class='col-md-2'style='text-align:center'><h4>val</h4></div>
			<div class='col-md-2'style='text-align:center'><h4>val</h4></div>
			<div class='col-md-2' style='text-align:right'><h4>some crap here that is tiny yay!</h4></div>
			<div class='col-md-2'></div>
		</div>
		
	</section>
	<section id="test">
		<input id="resdata" hidden value= <?= "'". $thegoods . "'"; ?> >
	</section>
@stop
<script type="text/javascript">

	(function(){	
		"use strict"
		window.onload  = function() {		
			var heading =`
				<div class="row rhead">
					<div class='col-md-2'>
						</div>
					<div class='col-md-2'><h1>Test</h1></div>
					<div class='col-md-4'></div>
					<div class='col-md-2' style='text-align:right;'><h4>some crap here that is tiny yay!</h4></div>
					<div class='col-md-2'></div>
				</div>
			`;


			var resdata = document.getElementById('resdata').value;
			var resdata1 = resdata.split('\\n');
			var cleanarry = [];
			
			resdata1.forEach(function(value, index, array){
				cleanarry.push(value.split(','));
			})


			console.log(heading);
			console.log(cleanarry);

		}
	})();


</script>
