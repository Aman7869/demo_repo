<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(!isset($_SESSION['name'])){
    header("location: ../index.php");
    exit;
}
include_once ('../config/config.php');
include CONTROLLER_PATH."articleController.php";

?>
<!DOCTYPE>
<html>
  <head>
    <title>Article</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS;?>bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS;?>category.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-expand-md navbar-fixed-top" data-spy="affix" data-offset-top="197" id="nav2">
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
            <li><a href="<?php echo BASE_URL;?>index.php"><span class="glyphicon glyphicon-home" href="#"></span> Home</a></li>
            <li><a href="<?php echo BASE_URL;?>views/profile.php"><span class="glyphicon glyphicon-user" href="#"></span> Profile</a></li>
            
            
            <li ><a href="#"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
            <li style="padding-top: 5px;"><a href="#">About_Us</a></li>
            <li style="padding-top: 5px;"><a href="<?php echo BASE_URL;?>views/contentPage.php"><i class="fa fa-fw fa-envelope"></i> Content_Page</a></li>
            <li style="padding-top: 5px;" class="active"><a href="<?php echo BASE_URL;?>views/category.php"><i class="fa fa-fw fa-envelope"></i>Article</a></li>
            <li style="margin-left: 900px;"><a href="<?php echo BASE_URL;?>views/logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
            
            
            
          </ul>
        </div>
      </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="top : 66px;">
      <div class="carousel-indicators">
        <button type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="../images/articleBg.png" class="d-block w-100" alt="..." height="700">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome</h1>
            <p>Welcome in Article page.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="../images/slider2.jpg" class="d-block w-100" alt="..." height="700">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome</h1>
            <p>Welcome in Article page.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="../images/slide3.jpg" class="d-block w-100" alt="..." height="700">
          <div class="carousel-caption d-none d-md-block">
            <h1>Welcome</h1>
            <p>Welcome in Article page.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
    </div>
    <h1 class="text-center">Welcome in Article Section</h1>
    <!-- <img src="../images/articleBg.png" width="100%" height="70%"> -->
    <?php displayInfo($conn);?>

    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </body>
</html>