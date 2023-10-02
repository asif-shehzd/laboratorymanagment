<?php
include("connection.php");
if(isset($_POST['sub'])){
  $fname = $_POST['fname'];
  $user = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $usertype='user';
  $qry = "insert into signup(fullname,user,email,password,usertype)values('$fname','$user','$email','$password','$usertype')";
  $run=mysqli_query($con,$qry) or die("Query Unsuccessful.");
  if($run){
    echo"<script>alert('Data Send Success')</script>";
    header('Location: http://localhost/medicalsystem/signin.php');
  }else{
    echo"<script>alert('Data Send Error')</script>";
    header('Location: http://localhost/medicalsystem/signup.php');
  }
}
?>