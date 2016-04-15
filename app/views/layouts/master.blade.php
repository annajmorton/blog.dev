<html>
<head>
	<title>master</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
	@yield('style')
	<style type="text/css">
		.alert {

			display: initial;
		}
	</style>

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

	@yield('content')
	
	@yield('script')

	@if(Session::has('successMessage')||Session::has('errorMessage'))
		<script type="text/javascript">
				
			(function() {
			"use strict"

				setTimeout(function(){

					
					console.log('why am i here');
					var alertmsg = document.getElementsByClassName("alert");
					console.log(alertmsg);
					alertmsg.style.display = 'none';
					

				}, 800);
			})();

		</script>	
	@endif 

</body>
</html>