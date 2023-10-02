<?php
include("connection.php");
$id = @$_POST['testid'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$un1 = $_POST['para1'];
$un2 = $_POST['para2'];
$un3 = $_POST['para3'];
$price = $_POST['cost'];
$qry = "UPDATE bloodtest SET fullname = '{$fname}' , shortname = '{$sname}' , unit1 = '{$un1}' , unit2 = '{$un2}' , unit3 = '{$un3}' , 
cost = '{$price}' where testid = {$id}";
$result = mysqli_query($con,$qry) or die("Query Unsuccessful.");
header("Location: http://localhost/medicalsystem/adminpannel/addtest.php");
mysqli_close($con);
?>