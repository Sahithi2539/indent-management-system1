<?php
include("connection.php");
include("details-insert.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" style="margin: 100px auto;">
        <div class="row">
            <p class="headingparagraph text-center centertext">EMPLOYEE MANAGEMENT SYSTEM</p>
        </div>
        <div class="row">
            <p class="text-end" style="font-size: larger; font-weight: bold;">Welcome, <?php echo ($_SESSION['username']); ?></p>
        </div>
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="8.php">ONGOING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="11.php">COMPLETED</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="12.php">TO BE APPROVED BY ME</a>
                </li>
              </ul>
</div>
        <div class="table-responsive" style="padding: 40px 0px;">
            <table id="myTable" class="table table-striped table-bordered table-hover text-center" style="margin: 70px 0; padding: 30px 0px 0px 0px;">
              <style>
                a,a:hover{
                  color: black;
                }
              </style>
              <title> Indent Description</title> 
              <thead>
                  <tr style="background-color: #4472c4; color:white;">
                    <th scope="col">ID </th>
                    <th scope="col">Institute</th>
                    <th scope="col">Type</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    
                    <td><a href="">VIITNELE01</a></td>
                    <td>VIIT</td>
                    <td>Electrical</td>
                    <td>Repair</td>
                    <td>HoD</td>
                    <td>Approved</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">APPROVE</button>
                        <button type="button" class="btn btn-danger btn-sm">DECLINE</button>
                    </td>
                  </tr> -->
                  <tr>
                    <?php
                      include("connection.php");
                      $sql = "SELECT indents.uniqueID as uniqueid, Institute,Type,Category,Description  FROM indentdb JOIN indents on indentdb.id = indents.ID where indents.uniqueID = '" . $_GET["title"] . "'";
                      $result = $con->query($sql);

                      if (!$result) {
                        die("Invalid query: " . $connection->error);
                      }

                      while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                          <td>" . $row["uniqueid"] . "</td>
                          <td>" . $row["Institute"] . "</td>
                          <td>" . $row["Type"] . "</td>
                          <td>" . $row["Category"] . "</td>
                          <td>" . $row["Description"] . "</td>
                          <td>
                          <a href='update.php?title=" . $_GET["title"] . "'><button type='button' class='btn btn-success btn-sm'>APPROVE</button></a>
                          <a href='delete.php?title=" . $_GET["title"] . "'><button type='button' class='btn btn-danger btn-sm'>DECLINE</button></a>
                          </td>
                        </tr>";
                      }
                      ?>
                  </tr>
                </tbody>
              </table>
        </div>
          <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          Ticket ID: VIITRCAR02 <br>
          APPROVED
          <div class="input-group">
            <span class="input-group-text">Remarks</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
    </script>
</html>