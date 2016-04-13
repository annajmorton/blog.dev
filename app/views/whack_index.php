
<!DOCTYPE html>

<html>

	<head>
	
		<title>Whack a Gator</title>
		<meta charset="utf8">

		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/whackamole_pub/gator.css">
		<link href='https://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	

	</head>



	<body>
		<div class="gamE">

				<div id="heading"><h1>Wacky Gator</h1></div>

			<div class="scoreBord">
				<label for="level">level:</label>
				<input id="level" data-status="on" value="1">
				<label for="wacks">wacks:</label>
				<input id="wacks" value="0">
				<label for="bites">bites:</label>
				<input id="bites" value="0">
				<label for="score">score:</label>
				<input id="score" value="0">			
			</div>

			<div class="MessageBoard"><div class="msgWindow"><span class="UserMessage"></span></div></div>

			<div class= "baYoo">
				<div id="hideout"></div>     
				<div id="o1" class="oL"><div class="obumper"><div class="ibumper"></div></div><div id="g1" class="gAtor" data-status="off"><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="noseA"></div><div class="noseB"></div><div class="noseB"></div></div><div class="obumper"><div class="ibumper"></div></div></div>
				<div id="o2" class="oL"><div class="obumper"><div class="ibumper"></div></div><div id="g2" class="gAtor" data-status="off"><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="noseA"></div><div class="noseB"></div><div class="noseB"></div></div><div class="obumper"><div class="ibumper"></div></div></div>
				<div id="o3" class="oL"><div class="obumper"><div class="ibumper"></div></div><div id="g3" class="gAtor" data-status="off"><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="noseA"></div><div class="noseB"></div><div class="noseB"></div></div><div class="obumper"><div class="ibumper"></div></div></div>
				<div id="o4" class="oL"><div class="obumper"><div class="ibumper"></div></div><div id="g4" class="gAtor" data-status="off"><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="noseA"></div><div class="noseB"></div><div class="noseB"></div></div><div class="obumper"><div class="ibumper"></div></div></div>
				<div id="o5" class="oL"><div class="obumper"><div class="ibumper"></div></div><div id="g5" class="gAtor" data-status="off"><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="eye eyeB"><div class="eye eyeP"></div></div><div class="noseA"></div><div class="noseB"></div><div class="noseB"></div></div><div class="obumper"><div class="ibumper"></div></div></div>
			</div>

			<div class="buttonBarrel">
				
				<button id="start" data-status="off"><div class="slot"></div><span><span class="button">25&#162</span> start game</span></button>
				<button id="quit"><div class="slot"></div><span><span class="button">25&#162</span> be a quitter </span></button>
			</div>
		</div>	

	<!-- javascript junk -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="/whackamole_pub/gator.js"></script>

	</body>

</html>

