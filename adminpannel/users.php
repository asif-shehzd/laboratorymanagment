<?php
include("connection.php");
session_start();
if(!(isset($_SESSION['user']))){
  echo"<script>alert('Login Your Account')</script>";
  header("Location:../signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <style>
            nav i{
                padding-top: 30px;
            }
            i{
                color: white;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><i class="fas fa-user-secret me-3"></i>Life Line</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav ">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt pt-0"></i></div>
                                Dashboard
                            </a>
                            <a href="index.php" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
                                <i class="fas fa-stethoscope me-2"></i>Appoitment
                              </a>
                              <a href="addtest.php" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
                                <i class="fas fa-tint me-2"></i>Add Test
                              </a>
                              <a href="sample.php" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
                                <i class="fas fa-user-md me-2"></i>Sample Collect
                              </a>
                              <a href="#" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
                                <i class="fas fa-paperclip  me-2"></i>Reports
                              </a>
                              <a href="users.php" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
                                <i class="fas fa-user-plus me-2"></i>Registered Users
                              </a>
                              <a href="#" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
                                <i class="fas fa-cogs me-2"></i>Setting
                              </a>
                              <a href="logout.php" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                              </a>

                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    
          
                                </nav>
                            </div>
                        </div>
                    </div> 
                          
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <span><?php echo($_SESSION['user']);?></span>
                    </div>        
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Users</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Register Users</li>
                        </ol>
                        <!--Table for availble test---------------->
                        
                          <div class="card">
                            <div class="card-header">
                              <i class="fas fa-table me-1"></i>
                              Users Data
                              <a href="adduser.php" type="button" class="btn btn-primary offset-10 ">
                                <i class="fas fa-plus pe-1"></i>New
                              </a>
                            </div>
                            
                            <div class="card-body">
                                <table class="table table-borderless">
                                  <thead>
                                  <tr>
                                    <th>Id</th>
                                    <th>Full Name</th>
                                    <th>Email</th> 
                                    <th>UserType</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <!--PHP Start Here------------------------->
                                  <?php
                                  include("connection.php");
                                  $qry = "select * from signup";
                                  $run = mysqli_query($con,$qry);
                                  while($show=mysqli_fetch_array($run)){
                                    ?>
                                    <tr>
                                      <td><?php echo $show['id']?></td>
                                      <td><?php echo $show['fullname']?></td>
                                      <td><?php echo $show['email']?></td>
                                      <td><?php echo $show['usertype']?></td>
                                      <td><a href="update.php?id=<?php echo $show['testid']?>"
                                      class="btn btn-primary" name="edt">Edit</a></td>
                                      <td><a href="delete.php?id=<?php echo $show['testid']?>" 
                                      class="btn btn-danger" name="dlt">
                                        Delete</a></td> 
                                    </tr>
                                    <?php
                                  }       
                                  ?> 
                                  </tbody>
                                </table>
                                      <!--table End------------------------------------->

                                </div>
                          </div>
          </body>
</html>