<?php
include("../connection.php");
session_start();
if(!(isset($_SESSION['user']))){
  echo"<script>alert('Please Login again!')</script>";
  header("Location:../signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
  <style>
    .navbar-brand img{
      max-width: 30%;
    }
    .nav-item a{
      font-size: 15px;
      font-weight: 500;
    }
    .nav-item a:hover{
      color: rgb(153, 226, 101);
      border: 1px solid rgba(153, 226, 101);
      border-radius: 20px;
      font-weight: bolder;
    }
    .navbar-nav .nav-link.active{
      color: rgb(153, 226, 101);
      font-weight: 700;
    }
    main #baner{
      color: #fff;
      background: url(../images/home.jpg) no-repeat 0 0;
      background-position: center;
      min-height: 650px;
      background-size: 100%;
      z-index: 1;
      position: relative;
    }
  </style>
</head>
<body>
  <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-light">
      <div class="container">
        <a class="navbar-brand " href="index.php">
          <img src="../images/mainlogo.png" class="img-fluid d-block w-100" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 " style="margin-left: auto; padding-right:5%;">
            <li class="nav-item ">
              <a class="nav-link active" href="index.php" style="padding-right: 50px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tests.php" style="padding-right: 50px;">Laboratory Tests</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team" style="padding-right: 50px;">Test Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appoitments.php" style="padding-right: 50px;">Appointments</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        </header>
        <main>
          <div class="container-fluid" id="baner">
            <div class="row">
              <div class="col">
                  
                </div>
              </div>
            </div>
          
        </main>
    
</body>
</html>