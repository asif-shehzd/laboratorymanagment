<?php
include("connection.php");
session_start();
if(isset($_POST['sub'])){
  $_SESSION['user']=$m=$_POST['user'];
  $_SESSION['password']=$p=$_POST['password'];
  $qry="select * from signup where user='$m' and password='$p'";
  $run=mysqli_query($con,$qry) or die("Connection Unsuccessful.");
  $row=mysqli_fetch_array($run);
  if($row['usertype']=='admin'){
    echo"<script>window.open('adminpannel/index.php','_self')</script>";
  }if($row['usertype']=='user'){
    echo"<script>window.open('patient/user.php','_self')</script>";
  }else{
    echo"<script>alert('Signin Agian')</script>";
    echo"<script>window.open('signin.php','_self')</script>";
  }
}
?>