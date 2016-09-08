@extends('layouts.master')

@section('style')
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Sue+Ellen+Francisco' rel='stylesheet' type='text/css'>


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
				
				background: url('/img/pebbel.jpg') no-repeat;
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
			div .modal-content{
			    background-image: url("/img/graph_paper_by_rawenLQ.jpg");
			    opacity: 0.90;
			    background-size: 100%;
			    background-repeat: repeat;
			    color: #003300;
			    font-family: 'Sue Ellen Francisco', cursive;
			}
			.modal-header{
				padding-bottom: 0px;
				margin-bottom: 0px;
			}
			.modal-title {
				text-align: center;
				padding-bottom: 0px;
				font-weight: bold;
				text-decoration: underline;
			}
			.modal-content h4{
				padding-top: 5%;
				font-weight: bold;
				border-bottom: dotted 0.1px;
			}
			.modal-content h5{ 
				padding-top: 2%;
				font-weight: bold;
				text-decoration: underline;
			}
			.col-md-3,.col-md-4{
				text-align: center;
			}
			.modal-body{
				padding-top: 0px;
				margin-top: 0px;
			}
	</style>
@stop

@section('navbar')
@stop

@section('content')
	<div class="rocks">
		<ul class='nav nav-pills'>
			<li id="r1"><a id='resume' href="" data-toggle="modal" data-target=".bd-example-modal-lg"><h1>RESUME</h1></a></li>
			<li id="r2"><a href="{{{ action('HomeController@showPortfolio') }}}"><h1>PORTFOLIO</h1></a></li>
			<li id="r3"><a href="{{{ action('PostsController@index') }}}"><h1>BLOG</h1></a></li>
		</ul>
	</div>


	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	    <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h3 class="modal-title" id="myModalLabel">RESUME</h3>
	      </div>
	      <div id="resume_page" class="modal-body container-fluid">
	 
	      </div>
	      <div class="modal-footer">
	    </div>
	  </div>
	</div>
	<div hidden>
		{{ Form::open(array('action' => 'AjaxsController@create','method'=>'GET','id'=>'getresume')); }}
		{{ Form::token()}}
		{{ Form::submit('Click Me!'); }}
		{{ Form::close(); }}
	</div>
@stop

@section('script')
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		"use strict"
		var udurr = 100;

		var wiggle = function(myelement) {
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
		var htmlBuild = function(linegroup,smcols=12){
		    var reshtml = '';
		    linegroup.forEach(function(line){    	
	    		if(line.search(/\w/) != -1){		
		    		line = line.replace(/"/g,'');
		    		line = line.split(/,(?!\d{1,3})(?! \w)/g);
					reshtml += '<div class="row">';
			    	line.forEach(function(phrase){
		    			if(phrase.search(/\w/) != -1){		
			    			if(phrase=='SKILLS'||phrase=='CREDENTIALS '||phrase=='EXPERIENCE'||phrase=='PROJECTS'){
			    				reshtml += '<div class="col-md-12"><h4>' + phrase + '</h4></div>';
			    			} else if(phrase.indexOf(':') != -1){
			    				reshtml += '<div class="col-md-12"><h5>' + phrase + '</h5></div>';
			    			} else {
			    				console.log(smcols);
			    				reshtml += '<div class="col-md-'+smcols+'"><h6>' + phrase.replace(/^,/,'') + '</h6></div>';
			    			}
			    		}
			    	});
			    	reshtml += '</div>';
	    		}
		    });
	    	return reshtml;
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

		$('#resume').click(function() {
			// form data request
			var form = $( '#getresume' );
			$.ajax({
				url: form.attr('action'),
				type: 'GET',
				data: {
					_token: form.children('input').val(),
				},

			}).done(function(response) {
				var blocks = [];
				var i=0;
				while(response[i]){
					
					var index = response[i].match(/(SKILLS)|(CREDENTIALS)|(EXPERIENCE)|(PROJECTS)|(Building Systems Modeling)|(Web-based Development)|(Outreach)/);
					if (index) {
						blocks.push(i);
					}
					i++;
				}

			    var reshtml = '';
		    	var skillsline = response.slice(blocks[0],blocks[1]);
		    	var credline = response.slice(blocks[1],blocks[2]);
		    	var expline = response.slice(blocks[2],blocks[3]);
		    	var prodline1 = response.slice(blocks[3],blocks[3]+3);
		    	var prodline2 = response.slice(blocks[3]+3,blocks[4]);
		    	var bsmline = response.slice(blocks[4],blocks[5]);
		    	var wbdline = response.slice(blocks[5],blocks[6]);
		    	var prezline = response.slice(blocks[6]);
		    	
			    reshtml += htmlBuild(skillsline,3);
		  		reshtml += htmlBuild(credline,6);
		  		reshtml += htmlBuild(expline,6);
		  		reshtml += htmlBuild(prodline1);
		  		reshtml += htmlBuild(prodline2,4);
		  		reshtml += htmlBuild(bsmline);
		  		reshtml += htmlBuild(wbdline,6);
		  		reshtml += htmlBuild(prezline);
			    $('#resume_page').html(reshtml);


			}).fail(function() {
			    console.log( "error with resume request" );
			}).always(function() {
			    console.log( "resume request complete" );
			});
		
		});



	</script>
@stop 

