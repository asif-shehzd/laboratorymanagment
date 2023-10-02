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
  <title>Appoitment- Patient Detail</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>
<style>
  *{
      margin:0;
      padding: 0;
      box-sizing:border-box
    }
    :root{
      --primary-font-family: 'Poppins', sans-serif;
      --light-white: #f5f8fa;
      --gray: #5e6278;
      --gray-1: #e3e3e3;
    }
    body{
      font-family: var(--primary-font-faimly);
      font-size: 14px;
      padding: 0 0 100px;
      background: url("../images/bg.png");
      background-position: bottom center;
      background-repeat: no-repeat;
      background-size: contain;
      background-attachment:fixed;
      min-height: 100%;
    }
  .wrapper label{
    padding-top: 20px;
    font-weight: 700;
  }
  .wrapper input:focus{
    box-shadow: none;
    border-color: #F58C71;
  }
  .wrapper select:focus{
    box-shadow: none;
    border-color: #F58C71;
  }
  .wrapper button{
    padding: 5px;
    background: #F58C71;
    color: #e3e3e3;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 20px;
    border: none;
    font-size: 15px;
    font-weight: bold;
  }
  .wrapper button:hover{
    padding: 5px;
    background: #F58C71;
    color: #fff;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 20px;
    border: none;
    font-weight: bold;
  }

  .wrapper h1
  {
    color: #F58C71;
    font-size: 30px;
    font-weight: 700;
  }
</style>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php
          include("connection.php");
          $id = @$_GET['id'];
          $qry = "select * from bloodtest where testid = '$id'";
          $run = mysqli_query($con,$qry) or die("Query Unsuccessful..");
          $show = mysqli_fetch_array($run);
          ?>
          <form action="formdata.php" method="POST" class="form-group mt-3" name="myform" style="margin-left: 170px;">
      <h1 class="text-center mb-3" style="margin-right: 200px;">Appoitment Form</h1>
      <p class="text-center fs-5 lead " style="margin-right: 17%; color:#F58C71">Please fill all information before submit your data...</p>
      <?php 
      include("connection.php");
      $user = $_SESSION['user'];
      $qry1 = "select * from signup where user='$user'";
      $run1 = mysqli_query($con,$qry1);
      $show1 = mysqli_fetch_array($run1);
      ?>
      <div class="row">
        <div class="col-lg-5">
          <label for="inputname">Patient Name:</label>
          <input type="text" class="form-control" name="pname" value="<?php echo $show1['user']?>" readonly>
        </div>
        <div class="col-md-5">
          <label for="phone">Mobile Number:</label>
          <input type="text" class="form-control" name="nomber" required>
        </div>
        <div class="col-md-5">
          <label for="text">Address:</label>
          <input type="text" class="form-control" name="adres" required>
        </div>
        <div class="col-md-3">
          <label for="text">Email Address:</label>
          <input type="text" class="form-control" name="mail" value="<?php echo $show1['email']?>" readonly>
        </div>
        <div class="col-md-2">
          <label>Time Shadule:</label>
          <select name="time" class="form-control">
            <option>8am-9am</option>
            <option>9am-10am</option>
            <option>10am-11am</option>
            <option>11am-12pm</option>
            <option>12pm-1pm</option>
            <option>1pm-2pm</option>
            <option>2pm-3pm</option>
            <option>3pm-4pm</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="text">Test No:</label>
          <input type="text" class="form-control" name="no" id="testno" onfocus="test()" readonly required>
        </div>
        <div class="col-md-4">
          <label for="text">Test Name:</label>
          <input type="text" class="form-control" name="tname" value="<?php echo $show['fullname'];?>" readonly>
        </div>
        <div class="col-md-3">
          <label for="text">Short Name:</label>
          <input type="text" class="form-control" name="sname" value="<?php echo $show['shortname'];?>" readonly>
        </div>
        <div class="col-md-5">
          <label for="text">Test Parameters:</label>
          <input type="text" class="form-control" name="units" value="<?php echo $show['unit1'];?>,<?php echo $show['unit2'];?>,<?php echo $show['unit3'];?>" readonly>
        </div>
        <div class="col-md-2">
          <label for="text">Price:</label>
          <input type="text" class="form-control" name="price" value="<?php echo $show['cost']?>" readonly>
        </div>
        
        <div class="col-md-3 mt-4 ">
        <label for="text">Gender:</label>
          <div class="custom-control custom-radio d-inline ps-3">
          <input type="radio" class="custom-control-input" name="gender" id="customcheckbox1">
          <label for="customcheckbox1" class="custom-control-label" >Male</label>
          </div>    
          <div class="custom-control custom-radio custom-control-inline d-inline ps-3">
          <input type="radio" class="custom-control-input " name="gender" id="customcheckbox2">
          <label for="customcheckbox2" class="custom-control-label" >Female</label>
          </div>
        </div>
        <div class="col-md-12 text-center mt-5">
          <button type="submit" value="submit" name="sub" class="btn" style="width: 50%; margin-right:20%">Submit Your Data</button>
        </div>
      </div>
    </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function test(){

    }
    document.getElementById('testno').value=Math.floor(Math.random()*1000);
  </script>
</body>
</html>