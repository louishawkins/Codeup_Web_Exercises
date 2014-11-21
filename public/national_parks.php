<?php require '../park_model.php' ?>
<html>
<head>
    <title>National Parks Database</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/parks.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <ul class="nav navbar-nav">
        <li><h3 id="title">National Parks Database</h3></li>
        <li><span class=\"glyphicon glyphicon-plus\"><button id="addRecord" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Record</button> 
       </li>
    </ul>
  </div>
</nav>
-->
<div class="container" id="records_container">
<div class="row" id="table_row">   
    <div id="recordsList" class="col-md-12">
            <table id="national_parks_table" class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date Established</th>
                    <th>Area (acres)</th>
                    <th>Description</th>
                </tr>
            <?php

                foreach($rows as $row) {
                    echo "<tr>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['location']}</td>";
                        echo "<td>{$row['date_established']}</td>";
                        echo "<td>{$row['area_in_acres']}</td>";
                        echo "<td>{$row['description']}</td>";
                    echo "</tr>";
                }
            ?>
            </table>
    </div> <!-- contactList -->
</div> <!-- table_row -->
<div class="row" id="pagination">
    <nav id="pager">
        <ul class="pager">
            <?php if($page > 1) {echo $Previous;}?>
            <?php if($page < $lastpage) {echo $Next;}?>
        </ul>
    </nav>
</div>
<!--modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModal">Add New Record</h4>
      </div> <!-- modal header -->
        <!-- MODAL BODY WITH FORM -->
      <div class="modal-body">
        <form id="newRecordForm" method="POST" action="/national_parks.php" class="form-horizontal" role="form">
            <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="location" name="location" placeholder="Location">
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date_established" name="date_established" placeholder="Date Established (yyyy-mm-dd)">
            </div>
            </div>
            <div class="form-group"><div class="col-sm-10">
                <input type="text" class="form-control" id="area_in_acres" name="area_in_acres" placeholder="Area (in acres)">
            </div></div>
            <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
            </div>
            </div>
      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Add Record</button>
      </div> <!-- modal-footer -->
        </form>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialogue -->
</div> <!-- master modal-div -->
<!-- end MODAL -->

</div> <!-- container -->
</body>
</html>

