<?php 

require_once '../parks/password.php';
require_once '../db_connect.php';
require_once '../parks/parks_reader.php';

// delete anything in the table

Ad::truncate();

$stmt = $connection->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($parks as $park) {

    
	$stmt->bindValue(':name', $park['name'] , PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'] , PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'] , PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'] , PDO::PARAM_STR);
	$stmt->bindValue(':description', $park['description'] , PDO::PARAM_STR);


    // $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $stmt->execute();

    echo "Inserted ID: " . $connection->lastInsertId() . PHP_EOL;

}


