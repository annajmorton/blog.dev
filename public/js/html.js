(function(){
	'use strict';
	$(document).ready(function(){
		
		var htmlBuildFromCSV = function(csvarry,cols=12){
		    var reshtml = '';
		    csvarry.forEach(function(line){    	
				var totdiv = line.length;
				var i=0;
				var templine=[];
				while(i<totdiv){
					
					if(line[i]!=''){
						templine.push(line[i]);
					}
					i++;
				}

				var div = templine.length;
				if(div!=0){
					cols = Math.floor(12/div);
					var j=0;
					reshtml += '<div class="row">';
					while(j<div){

						reshtml += '<div class="col-md-'+ cols +'">'+addTags(templine[j])+'</div>';
						j++;
					}
					reshtml += '</div>';
				}
				console.log(templine,cols);
			});
			return reshtml;
		};

		var addTags = function(text){

			if(text.match(/(SKILLS)|(CREDENTIALS)|(EXPERIENCE)|(PROJECTS)/) != null){
				text = '<h4>'+text+'</h4>';
			} else if(text.match(/:/)){
				text = '<h5>'+text+'</h5>';
			} else {
				text = '<h6>'+text+'</h6>';
			}
			return text;
		}
		//
		// Loading resume
		//

		$('#resume').click(function() {
			// form data request
			var form = $( '#getresume' );
			$.ajax({
				url: form.attr('action'),
				type: 'GET',
				data: {
					_token: form.children('input').val(),
				},

			}).done(function(response) {

			 response.shift();
			 response.shift();
			 console.log(response);
			 
			
			 var reshtml = htmlBuildFromCSV(response);
			 $('#resume_page').html(reshtml);


			}).fail(function() {
			    console.log( "error with resume request" );
			}).always(function() {
			    console.log( "resume request complete" );
			});

		});
	});
})();