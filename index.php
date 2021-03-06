<?php
  include('./php/login.php'); // Includes Login Script

  if(isset($_SESSION['login_user'])){
    header("location: profile.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home of The Chimi Pizza</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="./css/landing-page.css" rel="stylesheet">
    <link href="./css/login-register.css" rel="stylesheet" />
    <script src="./js/myScripts.js"></script>
    <script src="./js/login-register.js" type="text/javascript"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWrmiUK71YNfE0yig_mfvwTbLVdX6_ZdY&callback=initMap">
    </script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

      <div class="container">
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav mr-auto">  
            <li class="nav-item">
              <a class="nav-link" href="#">MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">OUR STORY</a>
            </li>
          </ul>

        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a target="_blank" href="https://www.facebook.com/Wahizza/">
                <i class="fa fa-facebook-official nav-link" aria-hidden="true"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a target="_blank" href="https://www.instagram.com/wahizza/">
                <i class="fa fa-instagram nav-link" aria-hidden="true"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a target="_blank" href="https://www.yelp.com/biz/wahizza-new-york">
                <i class="fa fa-yelp nav-link" aria-hidden="true"></i>
              </a>
            </li>

          </ul>
        
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">

      <div class="container">
      
        <div class="intro-message">
      
          <img src="./resources/img/wahizza_logo.png" alt="Smiley face" height="45%" width="45%">
          <ul class="list-inline intro-social-buttons">
            <li class="list-inline-item">
              <a href="#" class="btn btn-warning btn-lg">
                <span class="text-white"><b>¡ ORDER NOW !</b> </span>
              </a>
            </li>
          </ul>
      
        </div>
      
      </div>
    </header>

    <!-- Page Content -->
    <section class="content-section-a">

      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Pizza made excellent</h2>
            <p class="lead text-justify text-secondary">We are commited to freshness and quality of our food just to make you happy. Home of the world famous Chimi Pizza, even celebrities come here to have a little taste of joy.</p>
          </div>
          <div class="col-lg-5 mr-auto">
            <img class="img-fluid" src="./resources/img/soda-img.jpg" alt="">
          </div>
        </div>

      </div>
      <!-- /.container -->
    </section>

    <section class="content-section-b">

      <div class="container">

        <div class="text-center">
          <img src="./resources/img/menu-banner.svg" alt="Our Menu" height="70%" width="70%">
          <!-- <hr size="15%"> -->
        </div>
        <div class="row text-center">
          
          <!-- PIZZAS -->
          <div class="col">
            <!-- Pepperoni -->
            <div class="row text-center">
              <div class="col">
                <img src="./resources/img/menu-pizza.png" width="90%" height="90%">
              </div>
              <!-- Pizza description -->
              <div class="col align-self-center text-left">
                <div class="list-inline">
                  <h5 class="list-inline-item text-warning">Pepperoni</h5> 
                  <h6 class="list-inline-item text-secondary">$15</h6>
                </div>
                 <div class="text-justify text-secondary">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet metus sit amet nisi finibus,
                </div>
              </div> 
            </div>
            
            <!-- Margarita -->
            <div class="row text-center">
                
                <div class="col">
                  <img src="./resources/img/menu-pizza.png" width="90%" height="90%">
                </div>
                <div class="col align-self-center text-left">
                  <div class="list-inline">
                    <h5 class="list-inline-item text-warning">Margarita</h5> 
                    <h6 class="list-inline-item text-secondary">$15</h6>
                  </div>
                  <!-- Pizza description -->
                  <div class="text-justify text-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet metus sit amet nisi finibus,
                  </div>
                </div>   
            </div>

            <!-- Mexicana -->
            <div class="row text-center">
                
                <div class="col">
                  <img src="./resources/img/menu-pizza.png" width="90%" height="90%">
                </div>
                <div class="col text-left">
                  <div class="list-inline">
                    <h5 class="list-inline-item text-warning">Pepperoni</h5> 
                    <h6 class="list-inline-item text-secondary">$15</h6>
                  </div>
                  <!-- Pizza description -->
                  <div class="text-justify text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet metus sit amet nisi finibus,
                  </div>
                </div>   
            </div>
          </div>

          <div class="col align-self-center">

            <div class="row text-left">
              <!-- Beverages -->
              <div class="col">
                <h3 class="text-warning">Beverages</h3>
                
                <ul>
                  <li class="list-inline">
                    <h5 class="list-inline-item">Sodas</h5> 
                    <h6 class="list-inline-item text-secondary">$4</h6>
                  </li>
    
                  <li class="list-inline">
                    <h5 class="list-inline-item">Ice Cream Float</h5> 
                    <h6 class="list-inline-item text-secondary">$7</h6>
                  </li>
                  
                  <li class="list-inline">
                    <h5 class="list-inline-item">Milkshakes</h5> 
                    <h6 class="list-inline-item text-secondary">$6</h6>
                  </li>
                </ul>
              </div>

            </div>

            <div class="row text-left">

              <!-- Appetizers -->
              <div class="col">
                <h3 class="text-warning">Appetizers</h3>
                
                <ul>
                  <li class="list-inline">
                    <h5 class="list-inline-item">French Fries</h5> 
                    <h6 class="list-inline-item text-secondary">$4</h6>
                  </li>
                  
                  <li class="list-inline">
                    <h5 class="list-inline-item">Onion Rings</h5> 
                    <h6 class="list-inline-item text-secondary">$7</h6>
                  </li>

                  <li class="list-inline">
                    <h5 class="list-inline-item">Carne Asada Fries</h5> 
                    <h6 class="list-inline-item text-secondary">$8</h6>
                  </li>
                </ul>

              </div>

            </div>

          </div>

        </div>
        <br>
        <h3 class="text-center text-secondary">¡Call us now <span class="text-warning"><b>+1 212-837-8088</b></span>!</h3>
      </div>
    </section>
    <!-- /.container -->

    <!-- /.content-section-b -->
    <!-- /.content-section-a -->

    <div class="container-fluid banner">

        <div class="row h-100">

          <div class="col align-self-center text-center">
            <h2>Come for your chimi pizza!</h2>
          </div>

          <div class="col-8 " id="wahizzaLocation"></div>
        
        </div>
    </div>
    <!-- /.banner -->
    
    <!-- Login modal -->
    <div class="modal fade login" id="loginModal">
          <div class="modal-dialog login animated">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">  
                        <h4 class="text-secondary text-center">Admin</h4>
                        <div class="box">
                             <div class="content">
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="" accept-charset="UTF-8">
                                      <input id="email" class="form-control" type="text" placeholder="Username" name="Username">
                                      <input id="password" class="form-control" type="password" placeholder="Password" name="Password">
                                      <input class="btn btn-default btn-login" name="submit" type="submit" value="Login">
                                    </form>
                                </div>
                             </div>
                        </div>
                    </div>
              </div>
          </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a class="text-danger" href="#about">Franchises<a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a class="text-danger" href="#services">Services</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a class="text-danger" href="#contact">Contact</a>
          </li>
          <li class="list-inline-item">
            <li class="footer-menu-divider list-inline-item">&sdot;</li>
            <a  class="text-danger" onclick="openLoginModal();">Login</a>
          </li>
        </ul>
        <p class="copyright text-muted small">Copyright &copy; Wahizza 2017. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
