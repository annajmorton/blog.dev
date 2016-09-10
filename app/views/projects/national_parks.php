<?php  
	
require_once '../../parks/password.php';
require_once '../../db_connect.php';
require_once 'offset.php';
require_once '../../Input.php';
require_once '../../parks/PInput.php';

$stmt = $connection->query('SELECT * FROM national_parks;');
$pcount = $stmt->rowCount();
$pinfo = $stmt->columnCount();


$total_pages = floor(($pcount-1)/4);
$offset = offSet($pcount,$total_pages);
$sql_offset = $offset*4;

$stmt = $connection->query('SELECT * FROM national_parks LIMIT 4 OFFSET '. $sql_offset . ';');
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

extract(pageVariables($connection));

$add_park = "class='hidden'";
if ($edit_parkdb) {
	
	$add_park = '';
}

if (is_null($exMessage)==false) {

	$exception_show = '';	
}


?>

<!DOCTYPE html>

<html>

	<head>
	
		<title>Parks Page</title>
	
		<meta charset="utf8">
		<link rel="stylesheet" href="./parks.css">
		<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

	</head>



	<body>

		<?php include_once "parksNavBar.php"; ?>

		<div id="pageBuckett">
			
			<!-- TO PUT ITMES IN STND FLEX BOX, ADD FLEX CLASS -->
			<div id="hat" class="flex"><img src="HH_Park_ranger_hat.png" alt="ranger hat"></div>

			
			<div <?= $exception_show; ?>
				<div class="flex">

					<?php foreach ($exMessage as $key => $exception): ?>
							
						<?php if (empty($exception)==false): ?>
							<?= "<h3>" . $key . " input has the following issue: " . $exception . "</h3>" ?>
						<?php endif; ?>
			
					<?php endforeach; ?>

				</div>
			</div>



			<div class="flex">

				<div id="add_park" <?= $add_park; ?>>
					<form method="GET">

						<input name="in_name" value="<?=$in_name;?>" default="name" placeholder="park name">
						<input name="in_location" value="<?=$in_location;?>" placeholder="location">
						<input name="in_date_est" value="<?=$in_date_est;?>" placeholder="date established">
						<input name="in_area" value="<?=$in_area;?>" placeholder="park area in acres">
						<input name="in_description" value="<?=$in_description;?>" placeholder="description of the park">

						<input type="submit" name="edit_parkdb" value="add park">

					</form>
				</div>

			</div>			



			<div class="flex">

				<?php foreach ($parks as $key => $park): ?>
					<div class="parks">
						<h3><?= $park['name'];?></h3>
						<div class="park_details">
							<h4>location: <?= $park['location'];?></h4>
							<h4>date established: <?= $park['date_established'];?></h4>
							<h4>park area (acres): <?= $park['area_in_acres'];?></h4>
							<h8>description: <?= $park['description'];?></h8>
						</div>
					</div>

				<?php endforeach; ?>

				
			</div>

		
		</div>
		
		<?php include_once "parksFooter.html"; ?>		


		</script>

	</body>

</html>

