@extends('layouts.master')

@section('style')
	<style type="text/css">
		body {
				background: url('/img/hand_feather.JPG') no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;

				padding-top: 15px;
				margin: 0;
				font-family: 'Caesar Dressing', cursive;
				color: floralwhite;	
				background-color: #1a0d00;
			}

			.rocks {
				display: flex;
				width: 100%;
				align-items: center;
			}

			h1 {
				font-size: 32px;
				margin:0;
			}
			.nav-pills li a{
				
				background: url('/img/pebbel.jpg')no-repeat;
				background-size: 100%;	
				border-radius: 30px;

				box-shadow: -10px -3px 10px #1a0d00, inset 0 0 20px #1a0d00;
				color: 	#403326;

				margin: 0 10px 10px 10px;
				font-weight: bold;
				padding: 20 15 20 15;

			}
			.nav-pills li a:hover {

				/*color: white;*/
				box-shadow: -10px -4px 7px #1a0d00, inset 0 0 20px #1a0d00;
				text-decoration: underline;


			}
	</style>
@stop

@section('navbar')
@stop

@section('content')
	<div class="rocks">
		<ul class='nav nav-pills'>
			<li id="r1"><a href="{{{ action('HomeController@showResume') }}}"><h1>RESUME</h1></a></li>
			<li id="r2"><a href="{{{ action('HomeController@showPortfolio') }}}"><h1>PORTFOLIO</h1></a></li>
			<li id="r3"><a href="{{{ action('PostsController@index') }}}"><h1>BLOG</h1></a></li>
		</ul>
	</div>
@stop

@section('script')
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		"use strict"
		var udurr = 100;

		var wiggle = function(myelement) {
			console.log('here 1');
			var durr = 0.5*udurr;
			 $(myelement)
	    		.animate({'left':'-0.5px'},durr)
	    		.animate({'top':'-0.5px'},durr)
	    		.animate({'left':'+1px'},durr,'linear')
	    		.animate({'top':'1px'},durr)
	    		.animate({'left':'-0.5px'},durr)
	    		.animate({'top':'-1px'},durr);
		};

		var wobble = function(myelement) {
		
			var durr = 0.7*udurr;
			 $(myelement)
	    		.animate({'right':'-0.5px','bottom':'-0.5px'},durr)
	    		.animate({'right':'+1px','bottom':'1px'},durr,'linear')
	    		.animate({'right':'-0.5px','bottom':'-o.5px'},durr)
		};

		var buzz = function(myelement) {
			
			var durr = 0.5*udurr;
			 $(myelement)
	    		.animate({'right':'-0.5px'},durr)
	    		.animate({'right':'+1px'},durr)
	    		.animate({'right':'-0.5px'},durr)
		};

		function hoveB(myelement,act,xdurr) {

			var inv = setInterval(act,(xdurr*udurr), myelement);
			$(myelement)
			.on('mouseover', function(){   
				clearInterval(inv);
			})
			.on('mouseout', function(){
				inv = setInterval(act,(xdurr*udurr), myelement);
			})
	
		};

		hoveB('#r1',wiggle,4);
		hoveB('#r2',wobble,3.25);
		hoveB('#r3',buzz,2);


	</script>
@stop 

