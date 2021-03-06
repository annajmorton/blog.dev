<!DOCTYPE html>

<html>

	<head>
	
		<title>Simple Simon Test File</title>
		
		<meta charset="utf8">

		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/simon_pub/simon.css">


	</head>



	<body>
	<div class="container-fluid">
	<div class="row col-md-12"></div>

	<div class="PietMondrianColourLine">

		<div class="rOw1">
			<div class="bOx1x1 yellow"></div>
			<div class="bOx1x3 white wBbottom"></div>
			<div class="bOx1x4 white"></div>
			<div class="bOx1x1 red"></div>
			<div class="bOx1x1 white"></div>
			<div class="bOx1x1 white wBbottom"></div>
			<div class="bOx1x3 white wBtop"></div>
			<button id="B1" class= "sImonB blue"></button>
			<div class="bOx1x1 white"></div>
			<div class="bOx1x1 white"></div>
		</div>	

		<div class="rOw2">	
			<div class="bOx1x1r2 white wBbottom wBtop"></div>
			<div class="bOx2x1r2 white wBtop"></div>
			<button id="B4" class= "sImonB red"></button>
			<div class="bOx1x1r2 white"></div>
			<div class="bOx2x1r2 white wBbottom"></div>
			<div class="bOx1x4r2 white"></div>
			<button id="B2" class= "sImonB yellow"></button>
			<div class="bOx1x1r2 yellow"></div>
			<div class="bOx2x1r2 white"></div>
		</div>	

		<div class="rOw1">
			<div class="bOx1x1 blue wBbottom"></div>
			<div class="bOx1x3 white"></div>
			<div class="bOx1x1 white wBtop wBbottom"></div>
			<div class="bOx1x3 white"></div>
			<div class="bOx1x1 white wBbottom wBright"></div>
			<div class="bOx1x1 white wBbottom wBleft"></div>

			<div class="bOx1x1 blue wBtop"></div>
			<div class="bOx1x3 white"></div>
			<div class="bOx1x1 white wBtop"></div>
			<button id="B3" class= "sImonB blue"></button>
			<div class="bOx1x1 white wBtop wBright"></div>
			<div class="bOx1x1 white wBtop wBleft"></div>
		</div>
		
	</div>


		
		<div class="row col-md-12"></div>

		<div class= "row col-md-12">		
				<label for="rOund">the rOOOund:</label>
				<input id="rOund" value="1">
		</div>


		<div>
			<button id="start">start new game</button>
		</div>

	</div>

	<!-- JS time!!! -->
	
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<script src="/simon_pub/simon.js"></script>


	
	</body>

</html>