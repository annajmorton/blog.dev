<?php 

function offSet($pcount, $total_pages) {

	
	if (isset($_GET['page_prev'])) {
		
		$offset = $_GET['page_prev'];

		if ($offset < 0) {
			
			$offset = 0;
		}

	} else if (isset($_GET['page_next'])) {
		
		$offset = $_GET['page_next'];

		if ($offset > $total_pages) {
			
			$offset = $total_pages;
		}


	} else if (isset($_GET['page_select'])) {

		$offset = $_GET['page_select'];


	} else if (isset($_GET['edit_parkdb'])||isset($_GET['add_park'])) {

		$offset = $total_pages + 1;

	} else {

		$offset = 0;
		
	}

	return $offset;
	
}

function addPark() {

	if (isset($_GET['edit_parkdb'])) {

		return true;

	} else {

		false;
	}

}









