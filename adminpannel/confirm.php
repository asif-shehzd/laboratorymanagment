<?php
include("connection.php");
$id = @$_GET['id'];
$st ='conform';
$qry = "UPDATE patientdatil set status='$st' where id = '$id'";
$run = mysqli_query($con,$qry) or die("Query Unsuccessful..");
if($run){
  header("Location: index.php");
}else{
  echo("Query Error!");
  header("Location: index.php");
}
?>