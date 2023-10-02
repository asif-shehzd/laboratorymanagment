<?php
include("connection.php");
session_start();
if(!(isset($_SESSION['user']))){
    echo"<script>alert('Please login first')</script>";
    echo"<script>window.open('../signin.php','_self')</script>";
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
        <title>Appoitments</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <style>
            nav i{
                padding-top: 30px;
            }
            i{
                color: white;
            }
            .table tr th{
              padding: 40px;
              letter-spacing: 0.35px;
            }
            .protable{
              margin-top: 70px;
              margin-left: 260px;
              width: 80%;
              border-radius: 20px;
            }
            h1{
              font-size: 25px;
              margin-left: 25px;
              

            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"><i class="fas fa-user-secret me-3"></i>Life Line</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
            <!-- Navbar-->
            
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
                            <a href="#" class="list-group-item list-group-action bg-transparent second-text fw-bold px-3">
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
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
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
            <!--appoitment Data-->
            <div class="protable shadow">
            
            <table class="table table-borderless text-center">
                <h1 class="mt-4">Appoitment<a href="collectsample.php" class="btn btn-sm btn-info" style="margin-left: 1000px;">Sample</a></h1>
                    <thead>
                        <tr>
                        <th>Patient Name</th>
                        <th>Address</th>
                        <th>test Name</th>
                        <th>Cost</th>
                        <th>Sample Type</th>
                        <th>Delete</th>
                        <th>Reports</th>
                        </tr>
                    </thead>
                    <?php
                                    include("connection.php");
                                    $qry = "SELECT * FROM samples";
                                    $run = mysqli_query($con,$qry) or die("Query Unsuccessful..");
                                    while($show=mysqli_fetch_array($run)){

                                    
                                    ?>
                    <tbody>
                        <tr>
                        <td><?php echo $show['name']; ?></td>
                        <td><?php echo $show['phone']; ?></td>
                        <td><?php echo $show['testname']; ?></td>
                        <td><?php echo $show['price']; ?></td>
                        <td><?php echo $show['sampletype']; ?></td>
                        <td><a href="delete.php?id=<?php echo $show['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
                        <td><a href="report.php?id=<?php echo $show['name']?>" class="btn btn-sm btn-info">Report</a></td>
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                    </table>
            </div>
        </body>
</html>