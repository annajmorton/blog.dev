<html>
<head>
	<title>master</title>
	

	{{-- START SITE STYLE --}}
	<link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/master.css">
	<link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
  	{{-- END SITE STYLE --}}



  	{{-- START PAGE STYLE --}}
	@yield('style')

</head>

<body>

	{{-- START SUCESS AND ERROR MESSAGES --}}
	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{ Session::get('successMessage') }}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{ Session::get('errorMessage') }}</div>
	@endif
	{{-- END SUCESS AND ERROR MESSAGES --}}



	{{-- START NAV BAR --}}
	@section('navbar')
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				@yield('insert_nav')

				<button type="button" class="navbar-btn navbar-right btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Action <span class="caret"></span>
				</button>
		          <ul class="pull-right dropdown-menu">
		            <li><a href=" {{{ action('HomeController@showWelcome') }}}">home</a></li>
		            <li><a href=" {{{ action('HomeController@showPortfolio') }}} ">portfolio</a></li>
		            <li><a href=" {{{ action('PostsController@index') }}} ">blog</a></li>
		          </ul>

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


	{{-- START PAGE CONTENT --}}
	
		@yield('content')
	
	{{-- END PAGE CONTENT --}}



	{{-- START JS SCRIPTS --}}
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	@yield('script')
	{{-- END JS SCRIPTS --}}



	{{-- START SUCESS AND ERROR MESSAGES --}}
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
	{{-- END SUCESS AND ERROR MESSAGES --}}

</body>
</html>