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
    <title>4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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
        <form method='POST' action='' name='form'>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Institute:</label>
                        <select class="form-select" id="inputGroupSelect01" name="Institute" required>
                            <option value="VIIT">VIIT</option>
                            <option value="VIEW">VIEW</option>
                            <option value="VIPT">VIPT</option>
                            <option value="VVLDVD">VVL DVD</option>
                            <option value="VVLTMP">VVL TMP</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Category:</label>
                        <select class="form-select" id="inputGroupSelect01"name="Category" required>
                            <option value="Electrical">Electrical</option>
                            <option value="Carpentry">Carpentry</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option>
                            <option value="Plumbing">Plumbing</option>
                            <option value="Civil">Civil</option>
                            <option value="Transport">Transport</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Type:</label>
                        <select class="form-select" id="inputGroupSelect01" name="Type" required>
                            <option value="New">New</option>
                            <option value="Repair">Repair</option>
                            <option value="Removal">Removal</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" value="submit" class="btn btn-primary align-text-bottom" style="margin-top: 170px; float:right;" name = "submit">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>