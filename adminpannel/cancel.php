<?php
include("connection.php");
$id = @$_GET['id'];
$st = 'cancel';
$qry = "UPDATE patientdatil set status='$st' WHERE id='$id'";
$run = mysqli_query($con,$qry) or die("Query Unsuccesful.");
if($run){
  header("Location: index.php");
}else{
  echo("Query Unsuccessful!");
  header("Location: index.php");
}
?>