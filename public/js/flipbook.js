(function(){
	'use strict';
	$(document).ready(function(){

		//
		// Loading resume
		//
		var form = $( '#getresume' );
		$.ajax({
				url: form.attr('action'),
				type: 'GET',
				data: {
					_token: form.children('input').val(),
				},

			}).done(function(response) {
				console.log(response);
			 	document.projects = response.projects;
			 	document.pics = response.pics;
				bookwork(((document.projects.length-1)*2+4));

			}).fail(function() {
			    console.log( "error with resume request" );
			}).always(function() {
			    console.log( "resume request complete" );
		});		

	    var htmlBuildFromCSV = function(csvarry,cols=12){  	
			var reshtml = '';
			var totdiv = csvarry.length;
			var i=0;
			var templine=[];
			while(i<totdiv){
				
				if(csvarry[i]!=''){
					templine.push(csvarry[i]);
				}
				i++;
			}

			var div = templine.length;
			if(div!=0){
				var j=0;
				while(j<div){

					reshtml += '<div class="row"><div class="col-md-'+ cols +'">'+addTags(templine[j],j)+'</div></div>';
					j++;
				}
			}
			return reshtml;
		}
		

		var addTags = function(text,j){

			if(j==0){
				text = '<h1>'+text+'</h1>';
			} else {
				text = '<h2>'+text+'</h2>';
			}

			if(text.match(/(Whackygator)/)){
				var link = $('#Whacky').attr('href');
				text = '<a href="'+ link +'">'+text+'</a>';	
			}
			if(text.match(/(Simple Simon)/)){
				var link = $('#Simple').attr('href');
				text = '<a href="'+ link +'">'+text+'</a>';	
			}
			if(text.match(/(Wattbott)/)){
				text = '<a href="http://wattbott.xyz/">'+text+'</a>';	
			}

			return text;
		}

		function bookwork(numberOfPages){
			// 
			// Sample using dynamic pages with turn.js
			// Adds the pages that the book will need
			document.j = 0;
			function addPage(page, book, numberOfPages) {
				// 	First check if the page is already in the book
				if (!book.turn('hasPage', page)) {
					// Create an element for this page
					var element = $('<div />', {'class':'page '+((page%2==0) ? 'odd' : 'even'), 'data-num': page, 'id': 'page-'+page}).html('<i class="loader"></i>');
					
					// If not then add the page
					book.turn('addPage', element, page);

					if(page == numberOfPages){
						element.addClass('back');
					} else if (page == 2){
						element.addClass('innercover');
						element.html('<div class="page odd turn-page" style="height: 97%; width: 97%;"></div>');
					} else if (page == numberOfPages - 1){
						element.addClass('outtercover');
						element.html('<div class="page even turn-page" style="height: 97%; width: 97%;"></div>');
					} else {
						var text = '';
						if(page%2 != 0){
							text = htmlBuildFromCSV(document.projects[document.j]);
							if (document.pics[document.j]) {
								var k = 1;
								while(k<document.pics[document.j].length){
									text += '<div class="row"><div class="col-sm-1"></div><div class="col-sm-10"><img class="img-thumbnail" alt="project" src="/img/projects/'+document.pics[document.j][k]+'"></div><div class="col-sm-1"></div></div>'
									k++;
								}
							}
							document.j++;
						}
						// Let's assum that the data is comming from the server and the request takes 1s.
						element.html('<div class="data" style="height: 100%; width: 100%;">' + text +'</div>');			
					}

				}
			}

			// 
			// function for page turns
			$(window).ready(function(){
				$('#book').turn({acceleration: true,
					pages: numberOfPages,
					elevation: 50,
					gradients: !$.isTouch,
					when: {
						turning: function(e, page, view) {
							
							// Gets the range of pages that the book needs right now
							var range = $(this).turn('range', page);

							// Check if each page is within the book
							for (page = range[0]; page<=range[1]; page++){

								addPage(page, $(this), numberOfPages);
							} 
						},
						turned: function(e, page) {
							$('#page-number').val(page);
						}
					}
				});
				$('#number-pages').html(numberOfPages);
				$('#page-number').keydown(function(e){
					if (e.keyCode==13)
						$('#book').turn('page', $('#page-number').val());
						
				});
			});

			// how to turn the pages
			$(window).bind('keydown', function(e){
				if (e.target && e.target.tagName.toLowerCase()!='input')
					if (e.keyCode==37)
						$('#book').turn('previous');
					else if (e.keyCode==39)
						$('#book').turn('next');
			});
		}

		// instruction buttons
		var buttime = 6000;
		
		var lbutt = setInterval(function(){ 
		  	$('#bleft').toggleClass('animate');			
		}, buttime/9);
		
		var rbutt = setInterval(function(){ 
	  		$('#bright').toggleClass('animate');			
		}, buttime/9);
		
		$('#buttmodal').modal('show');
		
		setTimeout(function(){ 
			rbutt;
			lbutt;
		}, (buttime/9));
		
		setTimeout(function(){ 
			clearInterval(lbutt);
			clearInterval(rbutt);
			$('#buttmodal').modal('hide');
		}, buttime);

	});
})();

