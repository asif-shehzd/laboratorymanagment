<?php
include("../connection.php");
session_start();
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
    background-attachment: fixed;
    background-size: contain;
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
  margin-top: 38px;
  width: 12%;
  height: 5%;
  margin-left: 140px;
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
<body>
  <div class="container mt-3">
    <h1 class="text-center my-4"><span style="color: #F5C954;">Available</span> Blood Tests</h1>
    <p class="text-center justify-content-center">At first, patient visits the website. There he select the test and time for respective test. If he want to test for <br>sickness, he has to <span class="badge bg-info">make appoitment</span>  After clicking make  appoitment,he redirect to the register form.</p>
    <table class="table table-borderless" id="datatablesSimple">
          <thead class=" text-white text-center">
            <tr>
              <th>No</th>
              <th>Test Name</th>
              <th>Short Name</th>
              <th>Units</th>
              <th>Price</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="text-center">
          <?php
          include("../connection.php");
          $qry = "select * from bloodtest";
          $run = mysqli_query($con,$qry);
          while($show=mysqli_fetch_array($run)){
            ?>        
            <tr class="text-center">
              <td><?php echo $show['testid']?></td>
              <td><?php echo $show['fullname']?></td>
              <td><?php echo $show['shortname']?></td>
              <td><?php echo $show['unit1'];?>/<?php echo $show['unit2'];?>/<?php echo $show['unit3']?></td>
              <td><?php echo $show['cost']?></td>
              <td><a href="form.php?id=<?php echo $show['testid'];?>" class="btn">Appoitment</a></td>
              
            </tr>
          </tbody>
<?php
}
?>
        </table>
  </div>
  
</body>
</html>