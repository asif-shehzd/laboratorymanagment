<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin Form</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!---------------Inline Css Start Here-->
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
    }
    .wrapper{
      padding: 0 0 100px;
      background-image: url("images/bg.png");
      background-position: bottom center;
      background-repeat: no-repeat;
      background-size: contain;
      background-attachment:fixed;
      min-height: 100%;
    }
    .wrapper .logo img{
      max-width:40%; 
    }
    .wrapper input{
      background-color: var(--light-white);
      border-color: var(--light-white);
      color: var(gray);
    }
    .wrapper input:focus{
      box-shadow : none;
    }
    .wrapper .submit_btn{
      padding: 15px;
      font-weight:500;
    }
    .wrapper .login_with{
      padding: 15px;
      font-size:15px;
      font-weight:500;
      transition:0.3s ease-in-out;
    }
    .wrapper .submit_btn:focus,
    .wrapper .login_with:focus{
      box-shadow : none;
    }
    .wrapper .login_with:hover{
      background-color: var(--gray-1);
      border-color: var(--gray-1);
    }
    .wrapper .login_with img{
      max-width: 8%;
    }

  </style>
                <!---------------Inline Css End Here-->
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="col-sm-8 offset-sm-2 col-lg-3 col-xl-4 offset-xl-4 text-center">
        <div class="logo">
          <img src="images/logo.png" class="img-fluid" alt="logo">
        </div>
        <form action="sign.php" method="post" class="rounded shadow bg-white p-5">
          <h3 class="fw-bolder text-dark fs-4 mb-2">SignUp Now</h3>
          <div class="fw-normal text-muted mb-4">
            Already have an account? <a href="signin.php" class="text-primary fw-bold text-decoration-none">Click Login</a>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" name="fname" id="floatingInput" placeholder="Enter Your Name" required>
              <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="uname" id="floatingInput" placeholder="Enter Your Name"required>
              <label for="floatingInput">User Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="floatingInput" placeholder="User"required>
              <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="********" required>
              <label for="floatingPassword">Password</label>
            </div>
            <div class="mt-2 text-end">
              <a href="#" class="text-primary text-decoration-none fw-bold">Forget Password?</a>
              <button type="submit" name="sub" class="btn btn-primary submit_btn w-100 my-4">Continue</button>
              <div class="text-center text-muted text-uppercase mb-3">or</div>
              <a href="#" class="btn btn-light login_with w-100 mb-3">
                <img src="images/google-icon.svg" class="img-fluid me-3" alt="">Continue with Google
              </a>
              <a href="#" class="btn btn-light login_with w-100 mb-3">
                <img src="images/facebook-icon.svg" class="img-fluid me-3" alt="">Continue with Google
              </a>
              <a href="#" class="btn btn-light login_with w-100 mb-3">
                <img src="images/linkedin-icon.svg" class="img-fluid me-3" alt="">Continue with Google
              </a>
            </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>