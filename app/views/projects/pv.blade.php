@extends('layouts.master')

@section('style')
	
	<style type="text/css">

		#map-canvas{		

			width: 770px;
            height: 481px;
            float: left;
		}

		#heading{

			display: flex;
			justify-content: center;
		}

		.display{

			display: flex;
			justify-content: flex-start;
			flex-wrap:wrap; 
			background-color: papayawhip;
		}

		.display#results{

			background-color: cornsilk;
		}

	</style>

@stop

@section('content')
	<div id="heading"><h1>PV me!</h1></div>

	<div class="display" id="assump">
		
		<label for="addy">Addy</label><input id="addy">
		<label for="lat">lat</label><input id="lat">
		<label for="lon">lon</label><input id="lon">
		<label for="azimuth">azimuth</label><input id="azimuth">
		<label for="tilt">tilt</label><input id="tilt">
		<label for="cap">cap</label><input id="cap">
	</div>

	<div class="display" id="results">
		<label for="ann_kwh">Annual kWhs</label><input id="ann_kwh">
	</div>

	<div class="display">
		<div id="map-canvas"></div>
	</div>
@stop

@section('script')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIM335xSmgqAZEdnr9UYSRhIg-93Sso0g"></script>
	<script type="text/javascript">

		"use strict";

	//
	// MAP AND PLINE DEFINITION
	//
	     var mapOptions = {
            
            zoom: 20,
           
            center: {
                lat:  29.4284595,
                lng: -98.492433
            },

            mapTypeId : google.maps.MapTypeId.SATELLITE

        };

        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		   // Define the LatLng coordinates for the polygon's path.
		  var pvLayout = [
			{lat: 29.4284595, lng: -98.492433},
		    {lat: 29.42840, lng: -98.492433},
		    {lat: 29.42840, lng: -98.492300},
		    {lat: 29.4284595, lng: -98.492300},
		    {lat: 29.4284595, lng: -98.492433}
		  ];

		  // Construct the polygon.
		  var PVarray = new google.maps.Polygon({
		    paths: pvLayout,
		    strokeColor: '#FF0000',
		    strokeOpacity: 0.8,
		    strokeWeight: 2,
		    fillColor: '#FF0000',
		    fillOpacity: 0.35,
		    draggable: true,
		    editable: true
		  });

		  PVarray.setMap(map);




	//
	// PV WATTS API
	//

		$.ajax( ,{


			
		});

	</script>

@stop

