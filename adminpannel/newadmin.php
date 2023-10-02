<?php
include("connection.php");
if(isset($_POST['sub'])){
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $user = 'admin';
  $qry = "INSERT INTO signup(fullname,email,password,usertype)VALUES('$fname','$email','$password','$user')";
  $run = mysqli_query($con,$qry) or die("Query Unsuccessful..");
  if($run){
    echo"<script>alert('Data Send Success')</script>";
    header('Location: http://localhost/medicalsystem/adminpannel/users.php');
  }
}

?>