<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <title>Life Line</title>
  <!-- Bootstrap core CSS -->
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
<style>
  .nav-item a{
  font-size: 15px;
  font-weight: 500;
}
.nav-item a:hover{
      color: rgb(153, 226, 101);
      border: 1px solid rgba(153, 226, 101);
      border-radius: 10px;
      font-weight: 500;
    }
    .navbar-nav .nav-link.active{
      color: rgb(153, 226, 101);
      font-weight: 700;
    }
</style>

<body>
        <header>
          <nav class="navbar navbar-expand-lg navbar-light navbar-light">
      <div class="container">
        <a class="navbar-brand " href="index.php"><span style="color: #249C3D; font-style:sanserf">Life</span>Line</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 " style="margin-left: auto; padding-right:5%;">
            <li class="nav-item ">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About</a>
            </li>
            
            <li class="nav-item">
              <a class="btn btn-sm btn-primary mt-1" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-sm btn-secondary mt-1" href="signin.php">SignIn</a>
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
                <div class="banner-title">
                  <h1 class="text-center fw-bold text-white">We're here when you need us — for every care in the world.</h1></div>  
                </div>
              </div>
            </div>
          
          
        <!-- SERVICES CARD
  ================================================== -->
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-4">
              <div class="card shadow">
                <a href=""><img src="images/find doctor.jpg" alt="card" class="card-img-top"></a>
                <div class="card-body">
                  <a href="" class="text-decoration-none"><h4 class="card-title text-primary">Our Doctors</h4></a>
                  <p class="card-text">Search by name, specialty, location and more.</p>
                  <button class="btn btn-primary">Find a doctor</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow">
                <img src="images/locations card.jpg" alt="card" class="card-img-top">
                <div class="card-body">
                  <a href="" class="text-decoration-none"><h4 class="card-title text-primary">Locations & Directions</h4></a>
                  <p class="card-text">Find any of our 300+ locations.</p>
                  <button class="btn btn-primary">Get driving directions</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow">
                <img src="images/appointments-card.jpg" alt="card" class="card-img-top">
                <div class="card-body">
                  <a href="" class="text-decoration-none"><h4 class="card-title text-primary">Appointments</h4></a>
                  <p class="card-text">Get the in person or virtual care you need.</p>
                  <button class="btn btn-primary">Schedule now</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Blood Test Card Links
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-2">
          <div class="box" style="width: 300px; height:270px; width:370px; margin-top:150px; background:rgb(0, 125, 200);">
            <h3 class="text-center text-white" style="padding-top: 30%;">Health Library</h3>
          </div>

        </div>
        <div class="col-md-4">
          <div class="box1" style="width: 300px; height:270px; width:370px; margin-top:150px;">
              <ul class="py-5">
                <li><a href="">Diseases & Conditions</a></li>
                <li><a href="">Diagnostics & Testing</a></li>
                <li><a href="">Treatments & Procedures</a></li>
                <li><a href="">Body Systems & Organs</a></li>
                <li><a href="">Drugs Devices & Supplements</a></li>
              </ul>
            
          </div>
        </div>
      </div>
    </div>
    
        <!-- Search Tab
  ================================================== -->
  <section class="search-nav d-flex">
    <div class="container">
      <div class="row my-5">
        <div class="col-md-8 offset-2" >
          <h5 class="text-center py-2" style="background-color: #f5f5f5; border-color:#f5f5f5; color:#555; height:45px; width:810px; text-transform:uppercase;">Search Our health library</h5>
        </div>
        <div class="col-md-8 offset-2">
          <form class="d-flex py-2" style="width:810px;">
            <input type="search" class="form-control" placeholder="Search diseases, treatments, etc.">
          </form>
        </div>
      </div>
    </div>
  </section>

<!-- Service Card 
  ================================================== -->
<div class="testmoinal">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card1 my-5 shadow" style="margin-left: 150px;">
          <img src="images/icon appointments.svg" alt="">
          <h2>Get Care</h2>
        <p>Getting an appointment at Cleveland Clinic is easy. Schedule using any of these convenient options.</p>
    <hr style="background-color:#000;border: none;height: 5px;margin-bottom: 1.24969rem; box-sizing:content-box">
    <ul style="list-style: none">
      <li><a href="">866.320.4573</a></li>
      <li><a href="">Appointment request form</a></li>
      <li><a href="">Virtual visits</a></li>
      <li><a href="">Express Care and Urgent Care</a></li>
      <li><a href="">Virtual second opinions</a></li>
    </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card1 my-5 shadow justify-align-content-center" style="margin-left: 70px;">
          <img src="images/healthy icon.svg" alt="">
          <h2 style="color: #007BC2;">Live Healthier</h2>
        <p>Find health and wellness information to help you and your family live a bit healthier each day.</p>
    <hr style="background-color:#000;border: none;height: 5px;margin-bottom: 1.24969rem; box-sizing:content-box">
    <ul style="list-style: none">
      <li><a href="">Health news and trends</a></li>
      <li><a href="">Sign up for our newsletter</a></li>
      <li><a href="">Tune in to our podcast</a></li>
      <li><a href="">Nutrition and healthy eating</a></li>
      <li><a href="">Cold, flu, COVID + RSV</a></li>
    </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card1 my-5 shadow">
          <img src="images/need help.svg" alt="">
          <h2 style="color: #249C3D;">Need Help?</h2>
        <p>Have a question? We want to make it easy to find what you're looking for. Get answers online fast.</p>
    <hr style="background-color:#000;border: none;height: 5px;margin-bottom: 1.24969rem; box-sizing:content-box">
    <ul style="list-style: none">
      <li><a href="">216.444.2200</a></li>
      <li><a href="">Visiting our main campus</a></li>
      <li><a href="">Pay your bill online</a></li>
      <li><a href="">MyChart</a></li>
      <li><a href="">Request your medical records</a></li>
    </ul>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Clinic Card 
  ================================================== -->
  <div class="container" id="panelcard">
    <div class="row">
      <h1 class="text-center fw-bolder my-5">Why Choose Life Line Clinic?</h1>
      <div class="col-md-3">
        <div class="panel">
          <img src="images/patient-care.svg">
        </div>
        <h3>Patient-centered care:</h3>
          <p>We don’t just care for your health conditions. We care about you. That means our providers take the time to listen to what’s important to you before recommending next steps.</p>
      </div>
      <div class="col-md-3">
        <div class="panel">
          <img src="images/national.svg">
        </div>
        <h3>Patient-centered care:</h3>
          <p>We don’t just care for your health conditions. We care about you. That means our providers take the time to listen to what’s important to you before recommending next steps.</p>
      </div>
      <div class="col-md-3">
        <div class="panel">
          <img src="images/skilled providers.svg">
        </div>
        <h3>Patient-centered care:</h3>
          <p>We don’t just care for your health conditions. We care about you. That means our providers take the time to listen to what’s important to you before recommending next steps.</p>
      </div>
      <div class="col-md-3">
        <div class="panel">
          <img src="images/innovation.svg">
        </div>
        <h3>Patient-centered care:</h3>
          <p>We don’t just care for your health conditions. We care about you. That means our providers take the time to listen to what’s important to you before recommending next steps.</p>
      </div>
    </div>
  </div>

<!-- Clinic Location Cities 
  ================================================== -->

  <div class="container" style="margin-top: 100px; position:relative; background:#fff">
    <div class="row">
      <h1 class="text-center fw-bold mb-5" style="color: #363636;">Life Clinic Care Near You</h1>
    </div>
    <div class="col-md-3 shadow" style="position: absolute;">
      <img src="images/cilinic1.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h3 class="ps-3 my-3 fw-bold" style="font-size: 1.25rem;color: #007bc2;">Life Clinic <br>Locations in Ohio</h3></a>
    </div>
    
    <div class="col-md-3 shadow" style="position: absolute; left:28%">
      <img src="images/clinic 2.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h3 class="ps-3 my-3 fw-bold" style="font-size: 1.25rem;color: #007bc2;">Life Clinic<br>Locations in Florida</h3></a>
    </div>
    <div class="col-md-3 shadow" style="position: absolute; left:56%">
    <img src="images/clinic 3.jpg" class="d-block w-100" alt="">
    <a href="" class="text-decoration-none"><h3 class="ps-3  fw-bold" style="font-size: 1.25rem;color: #007bc2; margin-top:20px;margin-bottom:37px">Life Clinic Abu Dhabi</h3></a>
  </div>
    <div class="col-md-3 shadow" style="position: absolute; left:84%">
    <img src="images/clinic 4.jpg" class="d-block w-100" alt="">
    <a href="" class="text-decoration-none"><h3 class="ps-3  fw-bold" style="font-size: 1.25rem;color: #007bc2;margin-top:20px;margin-bottom:37px"">Life Clinic Canada</h3></a>
    </div>
  </div>

<!-- Clinic Location Cities 
  ================================================== -->

  <div class="container" style="margin-top: 300px;">
    <div class="row">
      <h1 class="mb-3" style="margin-top:5%; font-size:45px">Life Clinic <span class="text-warning">News & More</span>
    </h1>
    <div class="col-md-3">
      <img src="images/Mentor.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">Cleveland Clinic Mentor Hospital Lobby to Feature Original Artwork by Noted Artist</h5></a>
    </div>
    <div class="col-md-3">
      <img src="images/Headache.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">Headaches During Pregnancy: What To Know</h5></a>
    </div>
    <div class="col-md-3">
      <img src="images/Salad.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">Recipe: Crunchy Broccoli Walnut Salad</h5></a>
    </div>
    <div class="col-md-3">
      <img src="images/Yoga.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">5 Yoga Poses You Can Do Right Now To Strengthen Your Core</h5></a>
    </div>
    <div class="col-md-3 mt-5">
      <img src="images/Gender.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">How To Support Your Child as They Explore Their Gender Identity</h5></a>
    </div>
    <div class="col-md-3 mt-5">
      <img src="images/Smelling Salts.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">What Smelling Salts Do to Your Body</h5></a>
    </div>
    <div class="col-md-3 mt-5">
      <img src="images/tone.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">Leaders Establish the Tone for Their Teams (Podcast)</h5></a>
    </div>
    <div class="col-md-3 mt-5">
      <img src="images/birth.jpg" class="d-block w-100" alt="">
      <a href="" class="text-decoration-none"><h5 style="color: #0068AB; font-size:20px; font-weight:700">Doula Program Improves the Birthing Experience and Patient Outcomes</h5></a>
    </div>
    </div>
  </div>

<!-- Clinic Location Cities 
  ================================================== -->
  <div class="container-fluid my-5" style="background: #3E3F46;">
    <div class="row">
      <div class="col-md-4 my-5">
        <h5 class="text-center text-white">Call Appointment Center 24/7</h5>
        <h5 class="text-center text-primary">+92 348 7169471</h5>
      </div>
      <div class="col-md-4 my-5">
        <h5 class="text-center text-white">Questions</h5>
        <h5 class="text-center text-primary">+92 348 7169471</h5>
      </div>
      <div class="col-md-4 my-5">
        <a href="" class="btn btn-primary bg-white fw-bold" style="color: rgb(0, 120, 191); font-size:small;margin-top:15px">REQUEST AN APPOINTMENT</a>
      </div>
    </div>
  </div>
  <!-- Footer 
  ================================================== -->
  <div class="container my-5" id="foter">
    <div class="row">
      <div class="col-md-3">
        <h5>Actions</h5>
        <ul style="list-style: none;">
          <li><a href="">Appointments & Access</a></li>
          <li><a href="">Accepted Insurance</a></li>
          <li><a href="">Events Calendar</a></li>
          <li><a href="">Financial Assistance</a></li>
          <li><a href="">Phone Directory</a></li>
          <li><a href="">Virtual Visits</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Blog, News & Apps</h5>
        <ul style="list-style: none;">
          <li><a href="">Consult QD</a></li>
          <li><a href="">Health Essentials</a></li>
          <li><a href="">Newsroom</a></li>
          <li><a href="">MyChart</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>About Life Line Clinic</h5>
        <ul style="list-style: none;">
          <li><a href="">100 Years of Cleveland Clinic</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Locations</a></li>
          <li><a href="">Quality & Patient Safety</a></li>
          <li><a href="">Resources for Medical Professionals</a></li>
          <li>Careers</li></a>
          <li><a href="">Community Commitment</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Site Information & Policies</h5>
        <ul style="list-style: none;">
          <li><a href="">Send Us Feedback</a></li>
          <li><a href="">About this Website</a></li>
          <li><a href="">Privacy Policy</a></li>
          <li><a href="">Website Terms of Use</a></li>
          <li><a href="">Non-Discrimination Notice</a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="footer">
      9500 Pakistan Punjab | <a href="tel:+92 348 7169471">+92 348 7169471</a> | © 2023 Life Line Clinic. All Rights Reserved.
    </div>
  </div>
        </main>  
</body>
</html>