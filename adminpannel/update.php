<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Test</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container col-lg-8 mt-4">
    <div class="card">
<!--PHP code for fetch the data-->
<?php
      $tid=@$_GET['id'];
      $qry="select * from bloodtest where testid='$tid'";
      $result=mysqli_query($con,$qry) or die ("Query Unsuccessful.");
      if (mysqli_num_rows($result) >0 ) {
        # code...
      
      while($show = mysqli_fetch_array($result)){         
      ?>

    <form action="updat.php?id=<?php echo $show['testid']?>" method="post" >
      <div class="row">
        <h1 class="text-center text-muted">Update Blood Test</h1>
        <p class="text-center lead">It's Easy and Takes a Minutes</p>
        
          <div class="col-5 ms-5 mt-3">
            <label for="Name">Test Name</label>
            <input type="hidden" name="testid" value="<?php echo $show['testid']?>">
            <input type="text" class="form-control" value="<?php echo $show['fullname']?>" placeholder="Test Full Name" name="fname" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Name">Short Name</label>
            <input type="text" class="form-control" value="<?php echo $show['shortname']?>" placeholder="Test Short Name" name="sname" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Parameters">Test Parameters</label>
            <input type="text" class="form-control" value="<?php echo $show['unit1']?>" placeholder="Enter Test Parameters" name="para1" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Parameters">Test Parameters</label>
            <input type="text" class="form-control" value="<?php echo $show['unit2']?>" placeholder="Enter Test Parameters" name="para2" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Parameters">Test Parameters</label>
            <input type="text" class="form-control" value="<?php echo $show['unit3']?>" placeholder="Enter Test Parameters" name="para3" required>
          </div>
          <div class="col-5 ms-5 mt-3 mb-4">
            <label for="cost">Cost</label>
            <input type="text" class="form-control" value="<?php echo $show['cost']?>" placeholder="Price" name="cost">
          </div>
          <div class="col-2 m-auto mb-3">
          <button class="btn btn-success" type="submit" name="btn" value="update">Updat Record</button>
          </div>
        </form>
        <?php
      }}
        
        ?>
    </div>
  </div>
</body>
</html>