(function(){	
	'use strict';
	$(document).ready(function(){
		
		//
		// rock animation
		//

		var udurr = 100;

		var wiggle = function(myelement) {
			var durr = 0.5*udurr;
			 $(myelement)
				.animate({'left':'-0.5px'},durr)
				.animate({'top':'-0.5px'},durr)
				.animate({'left':'+1px'},durr,'linear')
				.animate({'top':'1px'},durr)
				.animate({'left':'-0.5px'},durr)
				.animate({'top':'-1px'},durr);
		};

		var wobble = function(myelement) {

			var durr = 0.7*udurr;
			 $(myelement)
				.animate({'right':'-0.5px','bottom':'-0.5px'},durr)
				.animate({'right':'+1px','bottom':'1px'},durr,'linear')
				.animate({'right':'-0.5px','bottom':'-o.5px'},durr)
		};

		var buzz = function(myelement) {
			
			var durr = 0.5*udurr;
			 $(myelement)
				.animate({'right':'-0.5px'},durr)
				.animate({'right':'+1px'},durr)
				.animate({'right':'-0.5px'},durr)
		};	
		function hoveB(myelement,act,xdurr) {

			var inv = setInterval(act,(xdurr*udurr), myelement);
			$(myelement)
			.on('mouseover', function(){   
				clearInterval(inv);
			})
			.on('mouseout', function(){
				inv = setInterval(act,(xdurr*udurr), myelement);
			})

		};

		hoveB('#r1',wiggle,4);
		hoveB('#r2',wobble,3.25);
		hoveB('#r3',buzz,2);


	})
})();