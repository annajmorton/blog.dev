(function() {
	"use strict"

	// global vars
		var level = parseInt($("#level").val());
		var wacks = parseInt($("#wacks").val());
		var bites = parseInt($("#bites").val());
		var score = parseInt($("#score").val());
		var playLoop;
		var gAtorINplay = 0;
		var dePloyed = 0;

	// functions
		function gatorSelect() {

			//i need to fix this to not pick the same gator
			return Math.floor(Math.random()*(5-1 + 1) + 1);
			
		};

		function gatorAnimate(gAtor) {	
			var Durr = 4000 / parseInt($("#level").val());
			gAtor.data("status","on");
			gAtor.children('div.weyeB').removeClass("weyeB").addClass("eye eyeB");
			
			gAtorINplay++;
			dePloyed++;

			SomeBodyWatchNme(gAtor);

			gAtor.animate({

				"top" : "45%"

			}, Durr).animate({

				"top" : ""

			}, Durr, function () {

				gAtor.off("click");

				if (gAtor.data("status") == "on"){

					bites = parseInt($("#bites").val());
					$("#bites").val(++bites);

				}
			
				gAtor.data("status","off");

				if (gAtorINplay > 0) {
					gAtorINplay--;
				}
				

				if (gAtorINplay != 0 || $("#level").data("status")!="off"){

					calcScore();
					
				} else {

					calcScore();
					levelFinish();	
				}

			});


		};

		function SomeBodyWatchNme(gAtor) {
			gAtor.on("click", function (event) {

				if (gAtor.data("status") == "on") {

					wacks = parseInt($("#wacks").val());
					$("#wacks").val(++wacks);
					gAtor.data("status","onwacked");
					gAtor.children('div.eye').removeClass("eye eyeB").addClass("weyeB");
				} 

			});

		};

		function gAtorPlay(){

			// generate a new gator to run
			var gAtor = $("#g" + gatorSelect());
			

			// check to makesure all 5 gators arn't already on
			if (gAtorINplay < 5) {

				// reselect a new gator until the selected gator is on that is off
				while(gAtor.data("status") != "off"){

					gAtor = $("#g" + gatorSelect());
				}

			} else {

				return;

			}
			
			// animate the selected gator and update score
			gatorAnimate(gAtor)
	

		};


		function levelPlay() {
				
			// set to on after the first click
			$("#start").data("status","on");

			playLoop = setInterval(function () {

				gAtorPlay();

				// teaser message
				level = parseInt($("#level").val());
				if (dePloyed == 11 - level) {

					var Durr = 6000 /level;
					if (level <= 5) {

						UserMessage("last chance to make boots", function () {}, Durr);
					} else {

						UserMessage("hurry up ya o'l boobie", function () {}, Durr);
					}
					
				}
			
				if(dePloyed == 10){

					clearInterval(playLoop);
					$("#level").data("status","off");
					 
				}

			},1000);
			
		};

		function levelFinish() {

			
			score = parseInt($("#score").val());

			if (score > 0) {
				
				level = parseInt($("#level").val());

				if (level < 10) {

					UserMessage("good work\! here comes the next level - are you ready sky king\?", function () {
						
						level++;
						$("#level").val(level);
						resetMygators();

						levelPlay(); 
					}, 4000);

					
				} else {

					UserMessage("Amazing\! you are a true jamboree", function () {

						resetMyLife();
					}, 5000);

				}
				

			} else {

				UserMessage("game over ya o\'l tooth", resetMyLife, 5000);
			}
			

		};
		
		
		function UserMessage(msghtml,fUn,Durr) {

			fUn();
			$(".UserMessage").html(msghtml)
			$(".UserMessage").animate({

				"opacity" : "1"

			}, Durr/8).animate({

				"opacity" : "0.75"

			}, Durr/8).animate({

				"opacity" : "1"

			},	Durr/8).animate({

				"opacity" : "0.75"

			}, Durr/8).animate({

				"opacity" : "1"

			}, Durr/8).animate({

				"opacity" : "0.75"

			},Durr/8).animate({

				"opacity" : "1"

			},Durr/8).animate({

				"opacity" : "0.75"

			},Durr/8, function () {

				$(this).html("");

			});

		};
			
		function calcScore(){

			wacks = parseInt($("#wacks").val());
			bites = parseInt($("#bites").val());

			$("#score").val(wacks-bites);
			

		};

		function resetMygators(){

			gAtorINplay = 0;
			dePloyed = 0;

			$(".gAtor").data("status","off");
			$(".gAtor").off();


			$("#level").data("status","on");

			$("#wacks").val("0");
			$("#bites").val("0");
			$("#score").val("0");

		};

		function resetMyLife(){

			$("#start").data("status","off");
			$("#level").val("1");
			resetMygators();
		};
			

		
		// Button action
		$("#start").on("click", function () {

			// check to makesure the game isn't already started
			if($("#start").data("status") == "off"){

				levelPlay();
			}

		});
		$("#quit").on("click", function () {

			// end the playloop interval if the quit button is clicked
			clearInterval(playLoop);
			
			// let the user know
			UserMessage("quittEERRrr", resetMyLife, 5000);
		
		});

		//flashing buttons and title
		setInterval(function () {

			$("button").addClass("flashbutton");
			$("h1").addClass("flashhead");
		});

		setInterval(function (){

			$("button").removeClass("flashbutton");
			$("h1").removeClass("flashhead");
		});
})();
	