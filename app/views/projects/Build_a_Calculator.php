
<!DOCTYPE html>

<html>

	<head>
	
		<title>My very own calculator!</title>
		
		<meta charset="utf8">

		<!-- Twitter BS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<style type="text/css">

			.diSSplay{

				background-color: black;
				color: black;

			}

			.dSee{

				/*This is a class inserted by Javascrtip on class diSSplay below to turn the text to a different color than the background (so you can see it)*/
				background-color: black;
				color: Aquamarine;
			}

			h1{
				
				text-align: center;

			}

			button{

				border-radius: 5%;
				font-size: 200%;
			}

			.diSSplay{

				text-align: center;
			}

		</style>

	</head>



	<body>
	<div class = "container-fluid">

			<div class = "row">
				<div class="col-xs-1"></div>
				<div class= "col-xs-10"><h1>cALc U LATor</h1></div>
				<div class="col-xs-1"></div>
			</div>

		<!-- screen -->

			<div class = "row">
				<div class="col-xs-1"></div>
					<h2 class= "col-xs-4 diSSplay" id="Loperand">_</h2>
					<h2 class= "col-xs-2 diSSplay" id="operator">_</h2>
					<h2 class= "col-xs-4 diSSplay" id="Roperand">_</h2>
				<div class="col-xs-1"></div>
			</div>


		<!-- number buttons -->

		<div class = "bUp">

			<div class = "row">
				<div class="col-xs-1"></div>
				<button class= "col-xs-2 buTTon" id="b0">0</button>
				<button class= "col-xs-2 buTTon" id="b1">1</button>
				<button class= "col-xs-2 buTTon" id="b2">2</button>
				<button class= "col-xs-2 buTTon" id="b3">3</button>
				<button class= "col-xs-2 buTTon" id="b4">4</button>
				<div class="col-xs-1"></div>
			</div>

			<div class = "row">	
				<div class="col-xs-1"></div>
				<button class= "col-xs-2 buTTon" id="b5">5</button>
				<button class= "col-xs-2 buTTon" id="b6">6</button>
				<button class= "col-xs-2 buTTon" id="b7">7</button>
				<button class= "col-xs-2 buTTon" id="b8">8</button>
				<button class= "col-xs-2 buTTon" id="b9">9</button>
				<div class="col-xs-1"></div>
			</div>	


		<!-- operator buttons -->

			<div class = "row">
				<div class="col-xs-1"></div>
				<button class= "col-xs-2 buTTon" id="ba">+</button>
				<button class= "col-xs-2 buTTon" id="bs">-</button>
				<button class= "col-xs-2 buTTon" id="bm">*</button>
				<button class= "col-xs-2 buTTon" id="bd">/</button>
				<button class= "col-xs-2 buTTon" id="dt">.</button>
				<div class="col-xs-1"></div>
			</div>


			<div class = "row">	
				<div class="col-xs-1"></div>
				<button class= "col-xs-5 buTTon" id="eQl">=</button>
		<!-- Clear my entire life brain heart and all hopes button -->
				<button class= "col-xs-5" id="cLeaR">C</button>
				<div class="col-xs-1"></div>
			</div>




		</div>

		<!-- the magic happens here! -->

		<script type="text/javascript">

		"use strict"

			var Loperand = document.getElementById("Loperand");
			var operator = document.getElementById("operator");
			var Roperand = document.getElementById("Roperand");
			
			var onL = false;
			var onO = false;
			var onR = false;

		
		
		// functions

		


			function pushB (event) {

				var gateway = "";
				var deCimAl = true;



				console.log(this.innerText);

				gateway = this.innerText;

				if (!isNaN(gateway)) {

											 
					 CheckLR(gateway, deCimAl); 

				} else {

					

					if (gateway == "=") {

						// here's the math!!!!
						var output;
						
						output = OperAtion(Loperand.innerText,operator.innerText, Roperand.innerText);
						

						console.log(output);
						
						Loperand.innerText = output;

						deCimAl = false;

						operator.innerText = "_";
						Roperand.innerText = "_";

						onL = true;
						onO = false;
						onR = false;

						// return gateway;

						

					} else if (gateway == "C") {

						return location.reload(true);


					} else if (gateway == ".") {
						
						CheckLR(gateway, deCimAl); 


					} else {

						operator.innerText = this.innerText;

						onO = true;

					}

				}

				dSee(onL, onO, onR);


			}

			
			function CheckLR (gateway, deCimAl) {

			   gateway = gateway.replace("_","");
			   console.log("Ba " + gateway);

			   var gatewayL = Loperand.innerText.replace("_","") + gateway;
			   var gatewayR = Roperand.innerText.replace("_","") + gateway;

				console.log("ha " + gatewayL);

		   	   if (gateway== ".") {
 
		   	   		console.log("Tra " + Loperand.innerText);
 
	   	  		 	if (Loperand.innerText.indexOf(".") != -1 || Roperand.innerText.indexOf(".") != -1 ) {
 
	   	  		 		return;
	   	  		 	}
 
		   	   }

			   if (Loperand.innerText == "_" || operator.innerText == "_" && deCimAl) {


			   	  Loperand.innerText = gatewayL;
			   	  onL = true;
			
			   } else {

				  Roperand.innerText = gatewayR;

				  onR = true;

			   };

		   	};



			function OperAtion (L, Op, R) {

				L = parseFloat(L);
				R = parseFloat(R);

				if (Op == "+") {

					return L + R;

				} else if (Op == "-") {

					return L - R;

				} else if (Op == "*") {

					return L * R;

				} else {

					if (R == 0) {

						alert("Division by 0 is undefined");
						return "undefined"

					};

					return L / R;

				};

			};


			function dSee(onL, onO ,onR ) {

				if (onL) {

					Loperand.className += " dSee";

				} else {

					Loperand.className = Loperand.className.replace(" dSee", "");
				}



				if (onO) {

					operator.className += " dSee";

				} else {

					operator.className = operator.className.replace(" dSee", "");
				}



				if (onR) {

					Roperand.className += " dSee";
					console.log("true " + Roperand.innerText);

				} else {

					Roperand.className = Roperand.className.replace(" dSee", "");


					console.log("false " + Roperand.innerText);
				}
				

			};



		// variables 

			var buTTon = document.getElementsByClassName("buTTon");
	

		// all other code crap

			for (var i = 0; i < buTTon.length; i++) {
				buTTon[i].addEventListener("click",pushB, false);
			};

			document.getElementById("cLeaR").addEventListener("click",pushB, false);


		</script>



		<!-- BS and more BS -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	</div>
	</body>

</html>

