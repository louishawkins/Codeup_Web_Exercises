<?php

require '../park_config.php';

$rows = array();

$limit = 4;
if(!isset($_GET['page'])){
    $page = 0;
    $offset = 0;
} else {
    $page = $_GET['page'];
    $offset = $page * 4;
    
}
    
$query = "SELECT name, location, date_established, area_in_acres FROM national_parks LIMIT 4 OFFSET $offset";
$stmt = $dbc->query($query);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}

$total_rows = $stmt->rowCount();
$lastpage = (ceil($total_rows/$limit)) + 1;
$prev = $page == 0 ? 0 : $page - 1;
$next = $page == $lastpage ? $lastpage : $page + 1;  

$Previous = "<li><a href=\"?page=$prev\">Previous</a></li>";
$Next = "<li><a href=\"?page=$next\">Next</a></li>";
// SELECT str_to_date('November 10, 1978', '%M %e, %Y')
?>