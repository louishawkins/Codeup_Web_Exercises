<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');
define('DB_USER', 'louis');
define('DB_PASS', 'ttwlh');

require 'include/dbconnect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'CREATE TABLE quotes (
		id INT UNSIGNED NOT NULL AUTO INCREMENT,
		author VARCHAR(240) NOT NULL,
		content TEXT NOT NULL,
		PRIMARY KEY (id)
	)';

$dbc->exec($query);

?>