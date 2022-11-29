<?php 
include('database.php');
include("connection.php");
if(isset($_POST['submit'])){
  $Block = $_POST['Block'];
  $RoomNo = $_POST['RoomNo'];
  $Department = $_POST['Department'];
  $Description = $_POST['Description'];
  $Institute = $_POST['Institute'];
  $Type=$_POST['Type'];
  $Category=$_POST['Category'];
  $Status = $_POST['Status'];
  $name = $_POST['name'];

     if($Institute == "VVL DVD"){$Institute = "VVLDVD";}elseif($Institute =="VVL TMP"){$Institute= "VVLTMP";}else{$Institute = $Institute;}
     if(!empty($Block) && !empty($RoomNo ) && !empty($Department) && !empty($Description)){
      $query = 
      "INSERT INTO indentdb (Institute,Type,Category,Block,RoomNo,Department,Description,status,uniqueid) 
      VALUES('$Institute',
             '$Type',
             '$Category',
             '$Block', 
             '$RoomNo',
             '$Department',
             '$Description',
             '$Status',
              upper(concat(substring('$Institute',1,4),substring('$Type',1,1),substring('$Category',1,3)))
            )";
      $result = $conn->query($query);

      $value2 = "DELETE FROM owner";
      $result3 = $conn->query($value2);

      $owner = "INSERT INTO owner (uniqueID, name, Approval) SELECT concat(uniqueid,id) AS uniqueID,'$name','Not Approved' FROM indentdb";
      $conn->query($owner);
     
      if($result){
        $_SESSION['Block']=$Block;
        $_SESSION['RoomNo']=$RoomNo;
        $_SESSION['Department']=$Department;
        $_SESSION['Description']=$Description;
        $_SESSION['Institute']=$Institute;
        $_SESSION['Category']=$Category;
        $_SESSION['Type']=$Type;
        $_SESSION['Status']=$Status;
        header("location:3.php");
      }  
    }

  }

?>