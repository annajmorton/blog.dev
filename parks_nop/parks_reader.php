<?php 

$filename = '../parks/park_names.csv';
$parks = file_get_contents($filename);
// var_dump($parks);

$parks = explode("\n", $parks);

foreach ($parks as $key => &$park) {
	
	if ($key == 0 || $key == count($parks)-1) {
		
		continue;
	}
	
	$temp = explode('","', $park);
	$park = [];

	$temp[0] = str_replace('"', "", $temp[0]);
	$park['name'] = $temp[0];
	$park['location'] = explode(" ", $temp[2]);
	$park['location'] = $park['location'][0];
	

	$temp[3] = date("Y-m-d",strtotime($temp[3]));
	$park['date_established'] = $temp[3];

	$temp[4] = explode(" ", $temp[4]);
	$temp[4] = str_replace(',', "", $temp[4][0]);
	$park['area_in_acres'] = $temp[4];
	$park['description'] = $temp[6];

}

array_shift($parks);
array_pop($parks);

// var_dump($parks);


// fix date, fix arces 