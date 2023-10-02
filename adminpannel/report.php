<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Report</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
  <style>
    .container h1{
      font-size: 30px; 
      color:#FFC107;
      font-style: italic;
    }
    .container input:focus{
      box-shadow: none;
    }
    thead tr th{
      border: none;
      color: #53CCB0;
    }
    tbody tr td{
      border: none;
    }
    span{
      color: #53CCB0;
      font-weight: 500;
    }
    </style>
</head>
<body>
  <div class="container shadow mt-2" style="background-color: #fff; height:95vh; border-radius:10px;">
    <form action="" method="post" class="mt-2">
      <div class="row">
        <h1 class="text-center mt-2 mb-5">Patient Test Details</h1>
      <div class="col-md-3">
        <input type="text" name="tname" class="form-control" placeholder="Enter the test name" required>
      </div>
      <div class="col-md-3">
        <input type="text" name="qu" class="form-control" placeholder="Enter the Quantaty" required>
      </div>
      <div class="col-md-3">
        <input type="text" name="unit" class="form-control" placeholder="Enter the Units" required>
      </div>
      <div class="col-md-3">
        <input type="text" name="rang" class="form-control" placeholder="Normal Range" required>
      </div>
    </div>
    <button type="submit" name="sub" class="btn btn btn-success mt-4 fw-bold" style="width: 80px;" value="Add">Add</button>
    
    </form><br>
    <?php
    include("connection.php");
    $qry = "SELECT * FROM samples";
    $run = mysqli_query($con,$qry);
    $show = mysqli_fetch_array($run);
    ?>
    

<?php
include("connection.php");
if(isset($_POST['sub'])){
$n = $_POST['tname'];
$q = $_POST['qu'];
$u = $_POST['unit'];
$r = $_POST['rang'];
$qry1 = "INSERT INTO report(testname,quantity,units,ranges)VALUES('$n','$q','$u','$r')";
$run1 = mysqli_query($con,$qry1);
if($run1)
          {
            echo "<script>window.open('report.php','_self')</script>";
          }
}
?>
<table class="table text-center">
  <div class="row"><div class="col-md-6"><h1 style="margin-left:120px; margin-bottom:30px">Test Details</h1></div>
  <div class="col-md-6"><a href="repot.php?id3=<?php echo $show['name']; ?>"><button class="btn btn-info text-white fw-bold" style="width: 80px; margin-left:50%">Print</button></a>
<a href="clear.php"><button class="btn btn-warning ms-3 text-white fw-bold">Clear Data</button></a>
</div>
</div>
  
  
  <thead>
    <tr>
  <th>Test Name</th>
  <th>Quantity</th>
  <th>units</th>
  <th>Normal Range</th>
</tr>
  </thead>
  <?php
  include("connection.php");
  $qry2 = "SELECT * FROM report";
  $run2 = mysqli_query($con,$qry2);
  while($show2=mysqli_fetch_array($run2)){
  ?>
  <tbody>
    <tr>
      <td><?php echo $show2['testname']?></td>
      <td><?php echo $show2['quantity']?></td>
      <td><?php echo $show2['units']?></td></td>
      <td><?php echo $show2['ranges']?></td></td>
    </tr>
  </tbody>
<?php
}
?>
</table>

  </div>
</body>
</html>