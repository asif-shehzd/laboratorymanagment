<?Php
include("connection.php");
$qry="delete from report";
$run=mysqli_query($con,$qry);
if($run)
{
	echo "<script>window.open('report.php','_self')</script>";
}
?>