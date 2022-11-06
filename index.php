<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$login = "";

if(!defined('ROOTPATH1')) {
  define('ROOTPATH1',__dir__.'/');
}
include_once (__dir__.'/'.'./config/config.php');

// include_once (ROOTPATH1.'config/config.php');
include_once ROOTPATH1.'contoller/login_db.php';
// include_once __DIR__.'/config/config.php';
if(isset($_SESSION['name'])){
  $login = '<span style="color: white; margin-left: 180px;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-off"></span> Logout</span>';
  $signup = "";


}else {
$login = '<a href="views/login.php" style="color: white; margin-left: 20px;"><span class="glyphicon glyphicon-log-in"></span> Login</a>';
$signup = '<a href="views/signup.php" style="color: white;"><i class="fa fa-fw fa-user"></i>Signup</a>';
}
?>
<!DOCTYPE >
<html lang="en">
<head>
  <title>Home</title>
  <?php include VIEW_PATH.'link/links.php'; ?>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS;?>index.css">



</head>

  <body>
   
    <header>

<div class="container">
 
  <div class="modal fade model-xl" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirm</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure want to logout</p>
        </div>
        <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
  <a href="views/logout.php" style="color: white;"><button type="button" class="btn btn-danger">Yes</button></a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
      <div class="col-sm-4">
        <img src="<?php echo BASE_URL_IMG;?>header1.jpeg" height="120px" width="300" style="border-radius: 30px;">
      </div>
      <form class="container imageseadsearch ">
        <div class="col-sm-4"></div>
        <div class="col-sm-3">
          
          <input class="form-control col-sm-2" type="text" placeholder="Search" id=
          "inputsearch">
        </div>
        <button class="btn btn-success" type="submit" id="btns">Search</button>
      </form>   
 

       </header>
    <nav class="navbar navbar-inverse navbar-expand-md" data-spy="affix" data-offset-top="197" id="nav1">
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
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home" href="#"></span> Home</a></li>
            <li><a href="#" style="padding-top: 20px;">Services</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user" href="#"></span> Contact</a></li>

            <li class="nav-item dropdown">
              <a href="#"  class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle = "dropdown" style="padding-top: 20px;">About_us</a>
              <div class="dropdown-menu" arial-labelledby ="navbarDropdown">
                <a href="#" class="dropdown-item">Comapny Profile</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-toggle dropright" data-toggle="dropdown" id="drplist">Technology
                 </a>
                
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Leadership Team</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Clients</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Awards</a>
              </div>


              
            </li>
             
            <div class = "login">
             <!--  <a href="<?php// echo BASE_URL;?>views/signup.php" style="color: white;"><i class="fa fa-fw fa-user"></i>Signup</a> -->
               <?php echo $signup; ?>
               <?php echo $login; ?>
              
            </div>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="parentdiv">
      <div class="leftside col-sm-2">
        <h1>Html tutorial</h1>
        <p>Home</p>
        <p>About_us</p>
        <p>Contact</p>
        <p>Profile</p>
        <p>Technologies</p>
        <p>Services</p>
        <p>Company</p>
        <p>Java</p>
        <p>PHP</p>
        <p>Jquery</p>
        <p>JavaScript</p>
        <p>Ajax</p>
        <p>JSON</p>
        <p>Object</p>
        <p>Class</p>
        <p>Files</p>
        <p>Download</p>
        <p>Upload</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
        <p>Home</p>
      </div>
      <div class="col-sm-8">
        <h1 style="text-align: center;">This is center</h1>
        <div class="row centerside">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="row centerside">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="row centerside">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="row centerside">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="rightside col-sm-2">
        <h1>This is Add section</h1>
        <img src="<?php echo BASE_URL_IMG;?>computer.jpeg"class = "rimg" height="200px" width="200px">
        <br>
        <img src="<?php echo BASE_URL_IMG;?>image2.jpeg" class = "rimg" height="200px" width="200px">
        <br>
        <img src="<?php echo BASE_URL_IMG;?>image3.jpeg" class = "rimg" height="200px" width="200px">
        <br>
        <img src="<?php echo BASE_URL_IMG;?>image4.jpeg" class = "rimg" height="200px" width="200px">
        <br>
        <img src="<?php echo BASE_URL_IMG;?>login5.jpeg" class = "rimg" height="200px" width="200px">
        <br>
        <img src="<?php echo BASE_URL_IMG;?>signup.jpg" class = "rimg" height="200px" width="200px">
        <br>
      </div>
    </div>
    <hr>
    <div class="row-lg-6" style="margin-top: 22cm;">
      
      
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
    <!-- for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>