<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New user</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
              <!----------Internal Css Start-->
              <style>
                *{
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
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
      background-image: url(../images/bg.png);
      background-repeat: no-repeat;
      background-size: contain;
      background-position: bottom center;
      background-attachment: fixed;
      min-height: 100%;
    }
    .wrapper .logo img{
      max-width: 40%;
    }
    .wrapper input{
      background-color: var(--light-white);
      border-color: var(--light-white);
      color: var(--gray);
    }
    .wrapper input:focus{
      box-shadow: none;
    }
    .wrapper .submit_btn{
      padding: 15px;
      font-weight: 500;
    }
    .wrapper .submit_btn:focus,
    .wrapper .login_with:focus{
      box-shadow : none;
    }
              </style>
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="col-md-8 offset-sm-2 col-lg-3 col-xl-4 offset-xl-4 text-center">
        <div class="logo">
          <img src="../images/logo.png" alt="logo" class="img-fluid">
        </div>
        <form action="newadmin.php" method="post" class="bg-white rounded shadow p-5">
          <h3 class="text-center text-dark fw-bolder fs-4 mb-4">Add New User</h3>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fname" id="floatingInput" placeholder="Enter Full Name..">
            <label for="floatingInput">Full Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingInput" placeholder="*******">
            <label for="floatingInput">Password</label>
            <button type="submit" name="sub" href="#" class="btn btn-primary submit_btn w-100 my-4">Continue</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>