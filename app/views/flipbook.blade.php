@extends('layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="/css/flipbook.css">
@stop

@section('navbar')
@stop

@section('content')
<div id="book">
	<div class="cover"><h1></h1></div>
</div>

<div id="controls" hidden>
	<label for="page-number">Page:</label> <input type="text" size="3" id="page-number"> of <span id="number-pages"></span>
</div>
@stop

	
@section('script')
<script type="text/javascript" src="/js/turn.js/turn.min.js"></script>
<script type="text/javascript" src='/js/flipbook.js'></script>
@stop
