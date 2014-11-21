<?php 
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'np_user');
define('DB_PASS', 'npuser');

require 'include/dbconnect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL,
	location VARCHAR(30) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres FLOAT(12,2) NOT NULL,
    description TEXT NOT NULL,
	PRIMARY KEY (id)
)';

$dbc->exec($query);

?>
