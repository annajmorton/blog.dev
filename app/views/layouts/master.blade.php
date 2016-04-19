<html>
<head>
	<title>master</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
	<style type="text/css">
		.alert {

			display: initial;
		}
		body {

			padding-top: 70px;
			font-family: 'Cuprum', sans-serif;
		}
		h5.navbar-text.navbar-right{

			color: red;
			font-family: 'Caesar Dressing', cursive;		
		}
	</style>
	@yield('style')

	{{-- <link href='https://fonts.googleapis.com/css?family=Sue+Ellen+Francisco' rel='stylesheet' type='text/css'> --}}
	<link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
</head>

<body>
	
	{{-- success and error messages --}}
	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{ Session::get('successMessage') }}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{ Session::get('errorMessage') }}</div>
	@endif
	{{-- end of success and error messages --}}



	{{-- NAV BAR --}}
	@section('navbar')
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">

			


				@yield('insert_nav')
				@if (Auth::check())
					<h5 class='navbar-text navbar-right' >{{{ "hi " . Auth::user()->first_name . "!" }}}</h5>
					{{ Form::open(['action' => ['UsersController@logout'] , 'method'=>'GET']) }}
						{{ Form::submit('logout',['class'=>'navbar-btn navbar-right btn btn-info']) }}
					{{ Form::close() }}
				@else 
					{{ Form::open(['action' => ['UsersController@login'] , 'method'=>'GET']) }}
						{{ Form::submit('login',['class'=>'navbar-btn navbar-right btn btn-info']) }}
					{{ Form::close() }}
				@endif 
			
			</div>
		</nav>
	@show
	{{-- END NAV BAR --}}

	<div class="container-fluid">
		@yield('content')
	</div>


	@yield('script')

	@if(Session::has('successMessage')||Session::has('errorMessage'))
		<script type="text/javascript">
				
			(function() {
			"use strict"

				setTimeout(function(){	
					console.log('why am i here');
					var alertmsg = document.getElementsByClassName("alert");
					// alertmsg[0].hidden = 'true';
					console.log(alertmsg);
					alertmsg[0].style.display = 'none';

				}, 1200);
			})();

		</script>	
	@endif 

</body>
</html>