<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <title>Dashboard - Add New Test</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
</head>
<body class="bg-light">
  <div class="container col-lg-8 mt-4">
    <div class="card">
    <form action="includes/newtest.php" method="post">
      <div class="row">
        <h1 class="text-center text-muted">Add New Blood Test</h1>
        <p class="text-center lead">It's Easy and Takes a Minutes</p>
        
          <div class="col-5 ms-5 mt-3">
            <label for="Name">Test Name</label>
            <input type="text" class="form-control" placeholder="Test Full Name" name="fname" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Name">Short Name</label>
            <input type="text" class="form-control" placeholder="Test Short Name" name="sname" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Parameters">Test Parameters</label>
            <input type="text" class="form-control" placeholder="Enter Test Parameters" name="para1" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Parameters">Test Parameters</label>
            <input type="text" class="form-control" placeholder="Enter Test Parameters" name="para2" required>
          </div>
          <div class="col-5 ms-5 mt-3">
            <label for="Parameters">Test Parameters</label>
            <input type="text" class="form-control" placeholder="Enter Test Parameters" name="para3" required>
          </div>
          <div class="col-5 ms-5 mt-3 mb-4">
            <label for="cost">Cost</label>
            <input type="text" class="form-control" placeholder="Price" name="cost">
          </div>
          <div class="col-2 m-auto mb-3">
          <button class="btn btn-success" type="submit" name="btn" value="Send Record">Send Record</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>