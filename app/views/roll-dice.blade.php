@extends('layouts.master')

@section('content')
	<h1>Here is the number baby!</h1>
	<h2>{{$rand_num}}</h2>

	<h1>Here is your super guess:</h1>
	<h2>{{$guess}}</h2>

	@if($rand_num == $guess)
		<h2>You guessed correctly!</h2>
	@else
		<h2>Nice try but no cigar!</h2>
	@endif
@stop
