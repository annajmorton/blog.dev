<html>
<head>
	  <!-- Add CSRF Token as a meta tag in your head for Angular JS -->
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
	<title>master</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
	<style type="text/css">
		.alert {

			display: initial;
			width: 100%;
		}
		body {

			padding-top: 70px;
			font-family: 'Cuprum', sans-serif;
		}
		h5.navbar-text.navbar-right{
			font-family: 'Caesar Dressing', cursive;		
		}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
	@yield('style')

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

				<button type="button" class="navbar-btn navbar-right btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Action <span class="caret"></span>
				</button>
		          <ul class="dropdown-menu">
		            {{-- <li><a href="{{ action('HomeController@showWelcome') }}">Action</a></li> --}}
		            <li><a href=" {{{ action('HomeController@showWelcome') }}}">home</a></li>
		            <li><a href=" {{{ action('HomeController@showResume') }}} ">resume</a></li>
		            <li><a href=" {{{ action('HomeController@showPortfolio') }}} ">portfolio</a></li>
		            <li><a href=" {{{ action('PostsController@index') }}} ">blog</a></li>
		          </ul>
		       	</span></a>


				@if (Auth::check())
					{{ Form::open(['action' => ['UsersController@logout'] , 'method'=>'GET']) }}
						{{ Form::submit("logout ".Auth::user()->first_name,['class'=>'navbar-btn navbar-right btn btn-info']) }}
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

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	@yield('script')

	@if(Session::has('successMessage')||Session::has('errorMessage'))
		<script type="text/javascript">
				
			(function() {
			"use strict"

				setTimeout(function(){	
					var alertmsg = document.getElementsByClassName("alert");
					// alertmsg[0].hidden = 'true';
					console.log(alertmsg);
					alertmsg[0].style.display = 'none';

				}, 2000);
			})();

		</script>	
	@endif 

</body>
</html>