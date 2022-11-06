<?php
session_start();
include_once'../config/config.php';
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
} else {
// session_destroy();
}
?>
<!DOCTYPE>
<html>
  <head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS;?>home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
  <?php include_once'./header.php'; ?>
    <!-- <nav class="navbar navbar-inverse navbar-expand-md navbar-fixed-top" data-spy="affix" data-offset-top="197" id="nav2">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="submit" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          
          
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASE_URL;?>index.php" <?php $_SESSION['name'];?>><span class="glyphicon glyphicon-home" href="#"></span> Home</a></li>
            <li><a href="<?php echo BASE_URL;?>views/profile.php" <?php $_SESSION['name'];?>><span class="glyphicon glyphicon-user" href="#"></span> Profile</a></li>
            
            
            <li ><a href="#"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
            <li style="padding-top: 5px;"><a href="#">About_Us</a></li>
            <li><a href="<?php echo BASE_URL;?>views/contentPage.php"><i class="fa fa-fw fa-envelope"></i> Content_Page</a></li>
            <li><a href="<?php echo BASE_URL;?>views/category.php" <?php $_SESSION['name'];?>><i class="fa fa-fw fa-envelope"></i>Article</a></li>
            <li style="margin-left: 560px;"><a href="<?php echo BASE_URL;?>views/logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
            
          </ul>
        </div>
      </div>
    </nav> -->
    <h1 style="text-align: center; margin-top: 100px;"><?php  echo $_SESSION['name']; ?>
    welcome in home page
    </h1>
    <div class="container">
      <div class="alert alert-success" role="alert">
        <h3 class="alert-heading"> Welcome <?php  echo $_SESSION['name']; ?> </h3>
        <p>Hey how are you doing? Welcome to iSecure.You are logged in as <?php echo
        $_SESSION['name'] ?></p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php">Using this link.</a></p>
      </div>
    </div>
    <div class="container-fluid b1">
    <div class="box col-lg-3">
      <h2>Box1</h2>
      <p class="center">dsuhuhg jhi ghr ghh fhgoihsfheoghoigshos hfewufo h hfoewufhw  hewouf hfweufehrhowhwe
      dsuhuhg jhi ghr ghh fhgoihsfheoghoigshos hfewufo h </p>
    </div>

    <div class="box col-lg-3">
      <h2>Box2</h2>
      <p class="center">dsuhuhg jhi ghr ghh fhgoihsfheoghoigshos hfewufo h hfoewufhw  hewouf hfweufehrhowhwe
      dsuhuhg jhi ghr ghh fhgoihsfheoghoigshos hfewufo h </p>
    </div>
    
    <div class="box col-lg-3">
      <h2>Box3</h2>
      <p class="center">dsuhuhg jhi ghr ghh fhgoihsfheoghoigshos hfewufo h hfoewufhw  hewouf hfweufehrhowhwe
      dsuhuhg jhi ghr ghh fhgoihsfheoghoigshos hfewufo h </p>
    </div>
    </div>
    
    <div class=" container-fluid row-lg-6 d1" style="margin-top: 2cm;">
      
      
      <div class="row-md-4 footabout">
        <h2>About Us </h2>
        <p>Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        </p>
        <div class="social-icons">
          <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
          <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
          <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
          <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        
        <div style="margin-left: 100px;">
          <div class="col-lg-4 information">
            <h2 style="margin-left: 30px;">Company </h2>
            <ul>
              <li>About Us</li>
              <li>History</li>
              <li>Our Partners</li>
              <li>Case Studies</li>
              <li>Portfolio</li>
              <li>Client Testimonial</li>
              <li>Media Coveeage</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="col-lg-4 information">
            <h2 style="margin-left: 40px;">Service</h2>
            <ul>
              <li>Mobile Application Development</li>
              <li>Custom Software Development</li>
              <li>Web Development</li>
              <li>Blockchain Development</li>
              <li>Microsoft Development</li>
              <li>Enterprise Mobility Solution</li>
              <li>AR/VR Solution</li>
              <li>SAP Solution</li>
            </ul>
          </div>
          <div class="col-lg-4 information">
            <h2 style="margin-left: 48px;">Industies</h2>
            <ul>
              <li>Education Solution</li>
              <li>Fintech Solution</li>
              <li>Healthcare Solution</li>
              <li>Gaming Solution</li>
              <li>Manufacturing Solution</li>
              <li>Retail Solution</li>
              <li>Media and Entertainment Solution</li>
              <li>Travel & Hospitality</li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <p>CopyRight © 2021 Digital All Rights Reserved</p>
    </footer>
  </body>
</html>