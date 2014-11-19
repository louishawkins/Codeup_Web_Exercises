<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'np_user');
define('DB_PASS', 'npuser');

require 'include/dbconnect.php';

$national_parks = [
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => 'November 12, 1971', 'area_in_acres' => 1082866],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => 'November 10, 1978', 'area_in_acres' => 892372],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => 'June 12, 1944', 'area_in_acres' => 316953],
	['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => 'May 14, 1930', 'area_in_acres' => 388566],
	['name' => 'Death Valley', 'location' => 'California, Nevada', 'date_established' => 'October 31, 1994', 'area_in_acres' => 951972],
	['name' => 'Denali', 'location' => 'Alaska', 'date_established' => 'February 26, 1917', 'area_in_acres' => 530922],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => 'May 30, 1934', 'area_in_acres' => 1047116],
	['name' => 'Glacier', 'location' => 'Montana', 'date_established' => 'May 11, 1910', 'area_in_acres' => 2190374],
	['name' => 'Grand Canyon', 'location' => 'Arizona', 'date_established' => 'February 26, 1919', 'area_in_acres' => 4564840],
	['name' => 'Joshua Tree', 'location' => 'California', 'date_established' => 'October 31, 1994', 'area_in_acres' => 1383340]
];

foreach ($national_parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres)
    		  VALUES ('{$park['name']}', '{$park['location']}', str_to_date('{$park['date_established']}', '%M %e, %Y'), '{$park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

// done ^

$stmt = $dbc->query('SELECT if, author, content FROM users');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: {$row['id']}\n";
    echo "AUTHOR: {$row['author']}\n";
//  echo "QUOTE: etc...
}

//alternataively, this will get ALL the things! 

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row) {
    echo "ID: {$row['id']}\n";
    //etc...
}


?>
