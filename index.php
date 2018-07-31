<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Pantry</title>


   <link rel="icon" type="image/x-icon" href="assets/foodpantryassets/FPLOGOI.ico?" type="image/x-icon" />

<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>
	
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Food Pantry</a>
	
<?php
$notLogged='<a class="btn btn-primary"href="./login">Sign In</a>';
$isLogged='<a class="btn btn-primary" href="./logout">Logout</a>';
$isLoggedDash='<a class="btn btn-primary" href="./dash">Dashboard</a>';
if(!isset($_SESSION['active'])){ echo $notLogged;}
else echo $isLogged;
?>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Welcome to the Food Pantry!</h1>
            <a class="btn btn-primary" href="./register">Where do I sign up?</a>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                </div>
                <div class="col-12 col-md-3">
                </div>
              </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
                <i class="far fa-handshake"></i>
              </div>
             <h3>Donate</h3>
              <p class="lead mb-0">The Food Pantry at CSUB is always open to donations!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Receive</h3>
              <p class="lead mb-0">Sign up and start benefiting from our services!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Volunteer</h3>
              <p class="lead mb-0">Want to give back to the community? The Food Pantry welcomes your helping hand!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/img2.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Give your helping hand for a good cause.</h2>
	    <p class="lead mb-0"> Most food that is not wanted usually ends up in the trash, how about you bring it to us? </p>
	</div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/img3.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>We're here to help.</h2>
            <p class="lead mb-0">No hardworking student or faculty should ever go hungry! Here at the Food Pantry we make sure that everyone has something to eat!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/img1.jpg'); background-position: bottom;"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Want to donate?</h2>
            <p class="lead mb-0">Contact us!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/t1.jpg" alt="">
	      <h5>Rafael A. Noriega</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/t3.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"The Food Pantry is amazing."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/t2.jpg" alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <!-- <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Ready to get started? Sign up now!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
 -->
    <!-- Footer -->
    <footer class="footer bg-light">
      <!-- <div class="container"> -->

        <div class="row">
          
          <div class="col-lg-6 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Food Pantry 2018. All Rights Reserved.</p>
          </div>
          
          <div class="col-lg-6  text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="https://www.facebook.com/Food-Pantry-at-CSUB-1642674799131751">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="https://www.instagram.com/csub_foodpantry/?hl=en">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>

      <!-- </div> -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
