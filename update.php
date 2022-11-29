<?php
$link = mysqli_connect("localhost", "root", "", "javatpoint");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "UPDATE owner SET Approval='Approved' WHERE uniqueID='$_GET[title]'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
header("location:description-indent.php?title=$_GET[title]");  
?>