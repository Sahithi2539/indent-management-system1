<?php 

if(isset($_POST['submit'])){
  session_start();
  $Institute = $_POST['Institute'];
  $Category = $_POST['Category'];
  $Type = $_POST['Type'];


     if(!empty($Institute) && !empty($Category ) && !empty($Type)){
      $query = "INSERT INTO details (Institute,Category,Type) VALUES('$Institute', '$Category','$Type')";
      $result = $con->query($query);
     
      if($result){
        $_SESSION['Institute']=$Institute;
        $_SESSION['Category']=$Category;
        $_SESSION['Type']=$Type;

        header("location: 5.php");
      }  
    }
  }

?>