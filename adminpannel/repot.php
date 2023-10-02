<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Print</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">

  <style>
    .container-fluid h1{
      font-size: 25px; 
      color:#FFC107;
      font-style: italic;
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
    .btn{
      width: 15%;
      margin-left: 450px;
      margin-top:20px ;
      border-radius: 10px;
      border: none;
      background: #53CCB0;
    }
    @media print {
.btn{
  display: none;
} 
#detail{
  display: none;
}     
    }
  </style>
</head>
<body>
  <div class="container-fluid rounded mt-3 h-auto" >
    <div class="row">
      <h1 class="text-center mt-4">Patient <span style="color: #53CCB0;">Report</span></h1>
      <div class="col-md-4 mb-3"><h5 style="margin-left:60px;color: #53CCB0;">Patient Details :</h5></div>
      <div class="col-md-4 offset-4"><h5 style="margin-left:130px;color: #53CCB0;">Test Details :</h5></div>
      <div class="row">
        <?php
        include("connection.php");
        $id = @$_GET['id3'];
        $qry = "SELECT * FROM patientdatil WHERE pname = '$id'";
        $run = mysqli_query($con,$qry) or die("Query Unsuccesfull ");
        $show = mysqli_fetch_array($run);
        ?>
        <div class="row ms-5">
          <div class="col-md-3"><span>Name:</span> <?php echo $show['pname'];?></div><br>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
          <div class="col-md-3"><span>TestName:</span> <?php echo $show['tname'];?></div><br>
        </div>
        <div class="row" style="margin-left:49px;">
          <div class="col-md-3"><span>Address:</span> <?php echo $show['adress'];?></div><br>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
          <div class="col-md-3"><span>Time:</span> <?php echo $show['time'];?></div><br>
        </div>
        <div class="row" style="margin-left:49px;">
          <div class="col-md-3"><span>Patient ID:</span> <?php echo $show['testno'];?></div><br>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
          <div class="col-md-3"><span>Price:</span> <?php echo $show['price'];?></div><br>
        </div>

<table class="table text-center mt-5">
  <div class="col-md-6">
    <h1 style="margin-top:20px; margin-left:120px; margin-bottom:-10px" id="detail">Test Details</h1>
  </div>
  <div class="col-md-6"><button class="btn btn-success hidden-print" onclick="print();">Print Report</button></div>
  <thead>
    
  <tr>
  <th>Test Name</th>
  <th>Quantity</th>
  <th>Parameters</th>
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
      
    </div>
  </div>
  
</body>
</html>