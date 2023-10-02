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
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        <div class="row pt-3">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" >
                                    <div class="card-body"><i class="fas fa-briefcase-medical"></i> Appoitment
                                <?php
                                $qry = "SELECT * FROM patientdatil";
                                $run = mysqli_query($con,$qry);
                                if($category_total = mysqli_num_rows($run)){
                                    echo '<h7 class="text-white fw-bold fs-5" style="margin-left:140px;">' .$category_total. '</h7>';
                                }
                                ?>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><i class="fas fa-tint"></i> Sample Received
                                <?php
                                $qry = "SELECT * FROM samples";
                                $run = mysqli_query($con,$qry);
                                if($category_total = mysqli_num_rows($run)){
                                    echo '<h7 class="text-white fw-bold fs-5" style="margin-left:120px;">' .$category_total. '</h7>';
                                }
                                ?>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><i class="fas fa-check"></i> Test Delivered</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><i class="fas fa-hand-holding-usd"></i> Total Amount
                                    
                                    <?php
                                $qry = "SELECT sum(price) as sumsalary from samples";
                                $run = mysqli_query($con,$qry);
                                $data = mysqli_fetch_array($run);
                                    echo '<h7 class="text-white fw-bold fs-5" style="margin-left:100px;">' 
                                    .$data['sumsalary']. '</h7>';
                                ?>
                                
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--------------Table for Appoitment Received---->
                        <div class="card" >
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Appoitments
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless" id="datatablesSimple" >
                                    <thead class="text-center">
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Appoitment</th>
                                            <th>Blood Test</th>
                                            <th>Status</th>
                                            <th>Conform</th>
                                            <th>Cancel</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include("connection.php");
                                    $qry = "SELECT * FROM patientdatil";
                                    $run = mysqli_query($con,$qry) or die("Query Unsuccessful..");
                                    while($show=mysqli_fetch_array($run)){

                                    
                                    ?>
                                    <tbody class="text-center">
                                        <tr>
                                            <td><?php echo $show['pname'];?></td>
                                            <td><?php echo $show['mobile'];?></td>
                                            <td><?php echo $show['adress'];?></td>
                                            <td><?php echo $show['time'];?></td>
                                            <td><?php echo $show['tname'];?></td>
                                            <td><?php echo $show['status'];?></td>
                                            <td><a href="confirm.php?id=<?php echo $show['id']; ?>" 
                                            class="btn btn-sm btn-info">Conform</a></td>
                                            <td><a href="cancel.php?id=<?php echo $show['id']; ?>" 
                                            class="btn btn-sm btn-danger">Cancel</a></td>
                                        </tr>

                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Life Line 2023</div>
                            <div>
                                <a href="#" style="text-decoration: none;">Privacy Policy</a>
                                &middot;
                                <a href="#" style="text-decoration: none;">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="bootstrap5/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
    </body>
</html>
