<?php
include("connection.php");
$id = @$_GET['id'];
$qry = "DELETE FROM bloodtest where testid='$id'";
$result = mysqli_query($con,$qry) or die("Query Unsuccessfull");
  header("Location: addtest.php") ;
  mysqli_close($con);
?>

<?php
include("connection.php");
$id = @$_GET['id'];
$qry1 = "DELETE * FROM samples where id='$id'";
$result1 = mysqli_query($con,$qry1) or die("Query Unsuccesful..");
header("Location: sample.php");
mysqli_close($con);
?>