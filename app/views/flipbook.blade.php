@extends('layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="/css/flipbook.css">
@stop

@section('navbar')
@stop

@section('content')
	<div id="book">
		<div class="cover">
			<div id="navstuff">
				<ul class="nav nav-pills">
					<li id="r2"><a href="{{{ action("HomeController@showWelcome") }}}"><h1>HOME</h1></a></li>
					<li id="r3"><a href="{{{ action("PostsController@index") }}}"><h1>BLOG</h1></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id='buttmodal' class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="float:left;">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
			<div class='keys'>
				<div class='bzz'><span class="glyphicon glyphicon-play" aria-hidden="true" style="transform: rotate(270deg);"></span></div>
			</div>
			<div class='keys'>
				<div id='bleft' class='bzz'><span class="glyphicon glyphicon-play" aria-hidden="true" style="transform: rotate(180deg);"></span>
				</div>
				<div class='bzz'><span class="glyphicon glyphicon-play" aria-hidden="true" style="transform: rotate(90deg);"></span></div>
				<div id='bright' class='bzz'><span class="glyphicon glyphicon-play" aria-hidden="true"></span></div>
			</div>
			<div style="text-align: center;"><h3>use keyboard left and right arrows to flip through lab book</h3></div>
	    </div>
	  </div>
	</div>





	<div id="controls" hidden>
		<label for="page-number">Page:</label> <input type="text" size="3" id="page-number"> of <span id="number-pages"></span>
	</div>
	<div hidden>
		{{ Form::open(array('action' => 'AjaxsController@portfolio','method'=>'GET','id'=>'getresume')); }}
		{{ Form::token()}}
		{{ Form::submit('Click Me!'); }}
		{{ Form::close(); }}
	</div>
	<a id='Simple' href="{{{action('HomeController@SimpleSimon')}}}" hidden></a>
	<a id='Whacky' href="{{{action('HomeController@Whackygator')}}}" hidden></a>
@stop

	
@section('script')
<script type="text/javascript" src="/js/turn/turn.min.js"></script>
<script type="text/javascript" src='/js/flipbook.js'></script>
@stop
