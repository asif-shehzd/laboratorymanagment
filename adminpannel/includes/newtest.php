<?php
include("../connection.php");
if(isset($_POST['btn'])){
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $para1 = $_POST['para1'];
  $para2 = $_POST['para2'];
  $para3 = $_POST['para3'];
  $cost  = $_POST['cost'];
  $qry = "insert into bloodtest(fullname,shortname,unit1,unit2,unit3,cost)values('$fname','$sname','$para1','$para2','$para3','$cost')";
  $run = mysqli_query($con,$qry);
  if($run){
    echo"<script>alert('Data Send Succesfull')</script>";
    echo"<script>window.open('../addtest.php','_self')</script>";
  }else{
    echo("Data Can't send success");
  }

}
?>