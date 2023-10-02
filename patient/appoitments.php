<?php
include("connection.php");
session_start();
if(!(isset($_SESSION['user']))){

echo"<script>alert('plz login 1st')</script>";
echo"<script>window.open('../signin.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Test</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    background: url(../images/bg.png) no-repeat 0 0;
    min-height: 100%;
    background-position: bottom center;
    background-size: contain;
    background-attachment: fixed;
  }
  .btn{
    color: #fff;
    border: 1px solid;
    border-radius: 20px;
    background: #53CCB0;
    font-weight: 500;
  }
  .btn:hover{
    color:#fff;
    border: 1px solid;
    border-radius: 20px;
    background: #53CCB0;
    font-weight: 500;
  }
  h1{
    color: #53CCB0;
    font-size: 30px;
    font-weight: bold;
    position: relative;
    font-style: italic;
  }
  h1::before{
    content: "";
  position: absolute;
  margin-top: 41px;
  width: 15%;
  height: 5%;
  margin-left: 67px;
  background: #53CCB0;
  }
  p{
    font-size: 15px;
    font-weight: 600;
    font-style: oblique;
    color: #53CCB0;
  }
  thead{
    background: #53CCB0;
  }
  tbody{
    color: #53CCB0;
    font-weight: 500;
  }
  
</style>
<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center my-4"><span style="color: #F5C954;">Your</span> Appoitments</h1>
    <p class="text-center">Please make sure to arrive a few minutes early. If you have any questions or need to reschedule, don't hesitate to contact the clinic. <span style="color: #F5C954;">Take care!</span></p>
    <table class="table table-borderless" id="datatablesSimple">
          <thead class="text-white text-center">
            <tr>
              <th>Sr</th>
              <th>Patient</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Email</th>
              <th>Appoitment Time</th>
              <th>Test Id</th>
              <th>Test Name</th>
              <th>Cost</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="text-center">

  <?php
	include("../connection.php");
	$n=$_SESSION['user'];
	$qry="select * from patientdatil where pname='$n'";
	$run=mysqli_query($con,$qry);
	while($show=mysqli_fetch_array($run)){
	?>        
            <tr>
              <td><?php echo $show['id']?></td>
              <td style="text-transform: uppercase;"><?php echo $show['pname'];?></td>
              <td><?php echo $show['mobile'];?></td>
              <td><?php echo $show['adress'];?></td>
              <td><?php echo $show['email'];?></td>
              <td><?php echo $show['time'];?></td>
              <td><?php echo $show['testno'];?></td>
              <td><?php echo $show['tname'];?></td>
              <td><?php echo $show['price'];?></td>
              <td><?php echo $show['status'];?></td>
              <td><a href="del.php?id=<?php echo $show['id']?>" class="btn btn-sm">Delete</a></td>
              
            </tr>
          </tbody>
<?php
}
?>
        </table>
  </div>
  
</body>
</html>