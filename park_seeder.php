<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'np_user');
define('DB_PASS', 'npuser');

require 'include/dbconnect.php';

$national_parks = [
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => 1082866, 'description' => ' '],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 892372, 'description' => ' '],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 316953, 'description' => ' '],
	['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => 388566, 'description' => ' '],
	['name' => 'Death Valley', 'location' => 'California, Nevada', 'date_established' => '1994-10-31', 'area_in_acres' => 951972, 'description' => ' '],
	['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => 530922, 'description' => ' '],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => 1047116, 'description' => ' '],
	['name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-05-11', 'area_in_acres' => 2190374, 'description' => ' '],
	['name' => 'Grand Canyon', 'location' => 'Arizona', 'date_established' => '1919-02-26', 'area_in_acres' => 4564840, 'description' => ' '],
	['name' => 'Joshua Tree', 'location' => 'California', 'date_established' => '1994-10-31', 'area_in_acres' => 1383340, 'description' => ' ']
];

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
  		  VALUES (:name, :location, :date_established, :area_in_acres, :description)";

$stmt = $dbc->prepare($query);

foreach ($national_parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
    
    $stmt->execute();
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

?>
