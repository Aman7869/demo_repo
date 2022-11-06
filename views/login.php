<?php
include_once'../config/config.php';
$a1 = "";
if($_SERVER['REQUEST_METHOD']=='POST') {
include CONTROLLER_PATH.'login_db.php';
}
?>
<!DOCTYPE>
<html>
	<head>
		<title>Login</title>
		
		    <?php include VIEW_PATH.'link/links.php'; ?>
		    

		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS;?>login.css">
	</head>
	<body>
		 <nav class="navbar navbar-inverse navbar-expand-md navbar-fixed-top h-50" data-spy="affix" data-offset-top="197" id="nav2">
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
            <li class=""><a href="<?php echo BASE_URL;?>index.php"><span class="glyphicon glyphicon-home" href="#"></span> Home</a></li>
            
            <li style="padding-top: 5px;"><a href="signup.php">Signup</a></li>
            <li style="padding-top: 5px;" class = "active"><a href="#"> Login</a></li>
           
          </ul>
        </div>
      </div>
    </nav>




	<!-- <nav id="nav1">Login</nav> -->
	<div style="margin-top: 56px;"><?php echo $a1; ?></div>
	<form id="form1" action = "login.php" method="POST">
		<div class="container-fluid ">
			<div class="col-lg-4"></div>
			<div class="col-lg-3 cls">
				<h1 style="text-align: center;">Login</h1>
				<div class="form-group row" style="margin-top: 60px;">
					<label for="myName" class="col-lg-4 col-form-label">Username</label>
					<div class="col-lg-6">
						<input type="text" class="form-control" id="myName" name="uname" placeholder="Enter Username" required>
					</div>
				</div>
				<div class="form-group row" style="margin-top: 30px;">
					<label for="pass" class="col-lg-4 col-form-label">Password</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" id="pass" name ="pass" placeholder="Password" required>
					</div>
				</div>
				<input type="submit" value="Login" class="btn btn-primary"
				id="btn">
			</div>
			<div class="col-lg-3">
				 <img src="<?php echo BASE_URL_IMG;?>login5.jpeg" id="imgs">
				<!-- <img src="/var/www/html/file_upload/bg2.jpg" id="imgs"> -->
				<!-- <img src="../images/education.jpeg" id="imgs"> -->
			</div>
		</form>
	</body>
</html>