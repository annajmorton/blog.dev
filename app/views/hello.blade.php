@extends('layouts.master')

@section('style')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/css/hello.css">
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


	<div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
		{{ Form::open(array('action' => 'AjaxsController@hello','method'=>'GET','id'=>'getresume')); }}
		{{ Form::token()}}
		{{ Form::submit('Click Me!'); }}
		{{ Form::close(); }}
	</div>
@stop

@section('script')
	<script src="/js/html.js"></script>
	<script src="/js/hello.js"></script>
@stop 

