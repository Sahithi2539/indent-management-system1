<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>

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
            <p class="text-end" style="font-size: larger; font-weight: bold;">Welcome,  <?php echo ($_SESSION['username']); ?></p>
        </div>
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="8.php">ONGOING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="11.php">COMPLETED</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="12.php">TO BE APPROVED BY ME</a>
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
             <thead>
              <tr style="background-color: #4472c4; color:white;">
                <th scope="col">ID </th>
                <th scope="col">Institute</th>
                <th scope="col">Type</th>
                <th scope="col">Category</th>
                <th scope="col">Owner</th>
                <th scope="col">Age</th>
                <th scope="col">Status</th>
                <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td><a href="">VIITNELE01</a></td>
                <td>VIIT</td>
                <td>Electrical</td>
                <td>Repair</td>
                <td>HoD</td>
                <td>1 day</td>
                <td>Approved</td>
                <td>-
                </td>
              </tr>
              <tr>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Dean</td>
                <td>2 day</td>
                <td>Approved</td>
                <td>-</td>
              </tr>
              <tr>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>DoA</td>
                <td>3 day</td>
                <td>Approved</td>
                <td>OK</td>
              </tr>
              <tr>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Principal</td>
                <td>3 day</td>
                <td>Approved</td>
                <td>-</td>
              </tr>
              <tr>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Purchase</td>
                <td>5 day</td>
                <td>Pending</td>
                <td>To be procured</td>
              </tr>
              <tr>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Rector</td>
                <td>4 day</td>
                <td>Approved</td>
                <td>-</td>
              </tr>
             
            </tbody>
          </table>
        </div>
        
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
    </script>
</html>