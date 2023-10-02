<?php
include("connection.php");
if(isset($_POST['sub'])){
$pname=$_POST['pname'];
$no=$_POST['nomber'];
$ad=$_POST['adres'];
$m=$_POST['mail'];
$t = $_POST['time'];
$n= $_POST['no'];
$tn=$_POST['tname'];
$sn= $_POST['sname'];
$u= $_POST['units'];
$p= $_POST['price'];
$g = $_POST['gender'];
$st = 'pending';
$qry ="insert into patientdatil(pname,mobile,adress,email,time,testno,tname,sname,units,price,gender,status)values('$pname','$no','$ad','$m','$t','$n','$tn','$sn','$u','$p','$g','$st')";
$run=mysqli_query($con,$qry) or die("Query unsuccessful..");
if($run){
  echo"<script>alert('data send success')</script>";
  header("Location: appoitments.php");
}else{
  echo"<script>alert('data send not success')</script>";
  header("Location: formdata.php");
}
}
?>