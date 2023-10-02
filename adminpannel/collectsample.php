<?php
include("connection.php");
session_start();
if(!(isset($_SESSION['user']))){
  echo"<script>alert('Please Signin Your Account!')</script>";
  header("Location:../signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample Data</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card mt-4">
          <div class="card-header text-center">
            <h4>Blood Sample</h4>
          </div>
          <div class="card-body">
            <form action="" method="get">
              <div class="row">
                <div class="col-md-8">
                  <input type="text" name="p_id" class="form-control" 
                  value="<?php if(isset($_GET['p_id'])){echo $_GET['p_id']; }?>" >
                </div>
                <div class="col-md-4">
                  <button class="btn btn-sm btn-primary">Search</button>
                </div>
              </div>
            </form>

<div class="row">
  <div class="col-md-12">
    <hr>

<?php
include("connection.php");
if(isset($_GET['p_id'])){
$p_id = $_GET['p_id'];
$qry = "SELECT * FROM patientdatil where testno = '$p_id'";
$run = mysqli_query($con,$qry);
if(mysqli_num_rows($run)>0){
  foreach($run as $show){


?>

    <div class="form-group mt-3">
      <form action="collectsample.php" method="post">
<label for="name" class="mb-2">Patient Name :</label>
<input type="text" name="name" class="form-control" value="<?php echo $show['pname']?>">
<div class="form-group mt-3">
  <label for="units">Phone :</label>
  <input type="text" name="mobile" class="form-control" value="<?php echo $show['mobile']?>">
</div>
<div class="form-group mt-3">
  <label for="units">Test Name :</label>
  <input type="text" name="tname" class="form-control" value="<?php echo $show['tname']?>">
</div>
<div class="form-group mt-3">
  <label for="units">Units :</label>
  <input type="text" name="units" class="form-control" value="<?php echo $show['units']?>">
</div>
<div class="form-group mt-3">
  <label for="units">Price :</label>
  <input type="text" name="price" class="form-control" value="<?php echo $show['price']?>">
</div>
<div class="form-group mt-3">
  <label for="sample">Sample Type</label>
  <select name="typ" class="form-control">
    <option value="blood">Blood</option>
    <option value="urine">Urine</option>
  </select>
</div>
<center><button type="submit" name="sub" value="send" class="btn btn-primary mt-3">Submit Data</button></center>
      </form>
      <?php
      }
}
else{
  echo"No Reocrd Found!";
}
}
      ?>
<?php
if(isset($_POST['sub'])){
  $pname = $_POST['name'];
  $mobil = $_POST['mobile'];
  $tname = $_POST['tname'];
  $units = $_POST['units'];
  $price = $_POST['price'];
  $typ   = $_POST['typ'];
  $qry1 = "INSERT INTO samples(name,phone,testname,units,price,sampletype)VALUES('$pname','$mobil','$tname','$units','$price','$typ')";
  $run1 = mysqli_query($con,$qry1) or die("Query Unsuccessful !");
  if($run1){
    header("Location:sample.php");
    echo"<script>alert('Data Send Successuful !')</script>";
  }else{
    echo("Error");
  }
}
?>

    </div>
  </div>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>