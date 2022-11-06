<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$msgc = '';

include_once ('../config/config.php');
$er = "";
$a2 = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['input1'])){
// if ($_POST['input1'] == $_SESSION['captcha']){
	include CONTROLLER_PATH."signup_db.php";
// }
// else{
// $msgc = '<span style="color:red;">Captcha failed!!!</span>';
// }
}
}
?>

<!DOCTYPE>
<html>
	<head>
		<title>Signup</title>
		<?php include __DIR__.'/link/signup_link.php';?>
	</head>
	<body>
		
		<nav class="nav navbar-inverse" id="nav1">
			<ul style="display: flex;">
				
				<li><a href="<?php echo BASE_URL;?>index.php">Home</a></li>
				<li><a href="#">Signup</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
			
		</nav>
		<div><?php echo $a2; ?></div>
		<div class="cls">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3" id="box">
					<form id="form1" action="signup.php" method="POST">
						
						<label for="myName" id="userlabel">Username</label>
						
						<input type="text" name="myName" id="myName" placeholder="Enter name" class="form-control">
						<label><?php echo $er; ?></label>
						<br>
						<label for="email1">Email</label>
						<input type="email" name="email" id="email1" placeholder="Enter email" class="form-control">
						<br>
						<label for="pass">Password</label>
						<input type="password" name="pass" id="pass" placeholder="Enter strong password ex : #Abcd123" class="form-control">
						<br>
						<label for="cpass">Confirm Password</label>
						<input type="password" name="cpass" id="cpass" placeholder="Enter confirm password" class="form-control">
						<br>
						<label for="dob">Date of Birth</label>
						<input type="date" name="dob" id="dob" placeholder="Enter date of birth date-month-year" class="form-control" required>
						<br>
						<fieldset >
							<label>Gender  : </label>
							<input type="radio" name="gender" value="Male" checked style="margin-left: 20px;">Male
							<input type="radio" name="gender" value="Female" style="margin-left: 15px;">Female<br>
							
						</fieldset>
						
						
						<input type="checkbox"  name="check" id="check">
						<label for="check">Accept the terms</label>
						<br>
						<div >
							<img src="captcha.php" id="captchaCSS">
							<a style="color: white;" href="signup.php">
								<i class="fa fa-refresh" aria-hidden="true"></i>
							</a>
							

						</div>
						<input type="text" name = "input1" id="input1" placeholder="Enter captcha" class="form-control" required>
						<!-- <input type="text" name="input1"> -->
						<input type="hidden" name="flag" value="1">
						<div style='margin-bottom:5px'>
							<?php echo $msgc; ?>
						</div>
						<br>
						<input type="submit" name = "submit" value="Submit" class="btn btn-primary"
						id="btn">
					</form>
					<h2 id="summary"></h2>
				</div>
				<div class="col-lg-3">
					<img src="<?php echo BASE_URL_IMG;?>signup.jpg" id="imgs" height="300" width="400">
				</div>
			</div>
		</div>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src = "<?php echo BASE_URL;?>
		js/signup_validation.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-validation/dist/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-validation/dist/additional-methods.min.js"></script>
		<!-- nowhite space feature present in above script file -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>js/bootstrap.min.js"></script>
		


	</body>
</html>