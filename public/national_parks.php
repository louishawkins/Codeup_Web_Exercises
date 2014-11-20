<?php require '../park_model.php' ?>
<html>
<head>
    <title>National Parks</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/parks.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row" id="add_button_row">
    <button id="addContactButton" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Contact</button> 
</div>

<div class="row" id="table_row">   
    <div id="contactList" class="col-md-12">
        <h1>List of National Parks</h1>
            <table id="national_parks_table" class="table table-bordered table-hover">
            <?php

                foreach($rows as $row) {
                    echo "<tr>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['location']}</td>";
                        $date_established = $row['date_established'];
                        echo "<td>{$date_established}</td>";
                        echo "<td>{$row['area_in_acres']}</td>";
                        echo "<td>{$row['description']}</td>";
                    echo "</tr>";
                }
            ?>
            </table>
    </div> <!-- contactList -->
</div> <!-- table_row -->
<div class="row" id="pagination">
    <nav>
        <ul class="pager">
            <?php if($page != 0) {echo $Previous;}?>
            <?php if($page != $lastpage) {echo $Next;}?>
        </ul>
    </nav>
</div>
<!--modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModal">Add New Contact</h4>
      </div> <!-- modal header -->
        <!-- MODAL BODY WITH FORM -->
      <div class="modal-body">
        <form id="newContactForm" method="POST" action="/address_book.php" class="form-horizontal" role="form">
            <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
            </div>
            </div>
            <div class="form-group"><div class="col-sm-10">
                <input type="text" class="form-control" id="city" name="city" placeholder="City">
            </div></div>
            <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="state" name="state" placeholder="State">
            </div>
            </div>
      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Add Contact</button>
      </div> <!-- modal-footer -->
        </form>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialogue -->
</div> <!-- master modal-div -->
<!-- end MODAL -->

</div> <!-- container -->
</body>
</html>

