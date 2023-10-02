<?php
include("connection.php");
$id=@$_GET['id'];
$qry = "DELETE FROM patientdatil WHERE id = '$id'";
$run = mysqli_query($con,$qry) or die("Query Unsuccesfull..");
if($run){
  echo"<script>alert('Appoitment Deleted!')</script>";
  header("Location: appoitments.php");
}else{
  echo("Data Not Deleted!");
  header("Location: appoitments.php");
}
?>