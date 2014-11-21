<?php

require '../park_config.php';
require '../park_new.php';

$rows = array();

$limit = 4;
$page = (isset($_GET['page']) && $_GET['page'] > 0) ? $_GET['page'] : 1;
$offset = ($page - 1) * 4;    

// Find out the total number of records
$rows_stmt = $dbc->prepare("SELECT * FROM national_parks");
$rows_stmt->execute();
$total_rows = $rows_stmt->rowCount();

// Select the rows to be displayed per page
$query = "SELECT name, location, date_established, area_in_acres, description FROM national_parks LIMIT :limit OFFSET :offset";

$stmt = $dbc->prepare($query);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $date = new DateTime($row['date_established']);
    $row['date_established'] = $date->format('M d, Y');
    $row['area_in_acres'] = number_format($row['area_in_acres']);
    $rows[] = $row;
}

$lastpage = (ceil($total_rows/$limit));
$prev = $page == 1 ? 1 : $page - 1;
$next = $page == $lastpage ? $lastpage : $page + 1;  

// Previous/Next buttons for rendering in HTML
$Previous = "<li><a href=\"?page=$prev\">Previous</a></li>";
$Next = "<li><a href=\"?page=$next\">Next</a></li>";

// CODE TO ACCEPT NEW ENTRIES FROM POST //
//

if(isset($_POST)){
    $record = new Record($_POST, $dbc);
    $passed_validation = $record->passed_validation;
    if($passed_validation) {
        $record->insert();
    }
}

?>
