<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header("location: login.php");
	// exit;
}
$fileError = "";
include_once '../config/config.php';
$sessionname = $_SESSION['name'];

include CONFIG_PATH . '/connectivity.php';
include MODEL_PATH . 'query_model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include CONTROLLER_PATH . "profile_db.php";
}
?>
<!DOCTYPE>
<html>

<head>
	<title>Profile</title>
	<?php include VIEW_PATH . 'link/profile_link.php'; ?>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery.js"></script>

</head>

<body>

	<nav class="navbar navbar-inverse navbar-expand-md navbar-default navbar-fixed-top" id="nav2">
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
					<li class=""><a href="<?php echo BASE_URL; ?>views/home.php"><span class="glyphicon glyphicon-home" href="#"></span> Home</a></li>
					<li class="active"><a href="<?php echo BASE_URL; ?>views/profile.php" <?php $_SESSION['name']; ?>><span class="glyphicon glyphicon-user" href="#"></span> Profile</a></li>


					<li><a href="#"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
					<li style="padding-top: 5px;"><a href="#"> About_Us</a></li>
					<li><a href="<?php echo BASE_URL; ?>views/contentPage.php"><i class="fa fa-fw fa-envelope"></i> Content_Page</a></li>
					<li><a href="<?php echo BASE_URL; ?>views/category.php"><i class="fa fa-fw fa-envelope"></i>Article</a></li>
					<li style="margin-left: 630px;"><a href="<?php echo BASE_URL; ?>views/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>


					<!-- <button class="btn btn-primary" data-target = "#mymodal" data-toggle = "modal" id="edit" style="width: 150px; font-size: 20px;">Edit</button> -->
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="modal ml-5" id="mymodal">
			<div class=" w-50">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="text-center text-primary">Edit</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form action="profile.php" method="POST" id="form2" enctype="multipart/form-data">

							<div class="form-group">
								<label style="color: black;">Add phone number</label>
								<input type="number" name="phone" id="phone" class="form-control" required>
							</div>
							<div class="form-group">
								<label style="color: black;">Add address</label>
								<input type="text" name="address" id="address" class="form-control" value="" required>
							</div>
							<div class="form-group">
								<label style="color: black;">Change DOB</label>
								<input type="date" name="dob" id="dob" class="form-control">
							</div>
							<div class="form-group">
								<label style="color: black;">Add image</label>
								<input type="file" name="file" id="file_image" class="form-control">
								<input type="hidden" name="img" id="img">
								<!-- <label style="color: black;"><?php //echo $fileError; 
																	?></label> -->
							</div>
							<div class="form-group" style="color: black;">
								<fieldset class="gender">
									<label class="gender">Gender : </label>
									<input type="radio" id="genderm" name="gender" value="Male" checked>Male
									<input type="radio" id="genderf" name="gender" value="Female">Female<br>

								</fieldset>
							</div>
							<div class="form-group">
								<label style="color: black;">Country : </label><br>
								<select class="" id="country" value="" style="color: black; width: 100%;" name="country" required>
									<option value="" id="ccountry" style="color: black;">Select Country</option>
								</select>
							</div>
							<div class="form-group">
								<label style="color: black;">State : </label><br>
								<select class="" id="state" value="" style="color: black; width: 100%;" name="state" required>
									<option value="" id="sstate">Select state</option>
								</select>
							</div>
							<div class="form-group">
								<label style="color: black;">City: </label><br>
								<select id="city" style="color: black; width: 100%;" name="city" required>
									<option value="">Select city</option>
								</select>

							</div>

							<input type="submit" class="btn btn-primary" name="submit" value="Submit" id="btn">

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-4"></div>
	<div id="divimg" class="col-lg-4">
		<button class="btn btn-primary" data-target="#mymodal" data-toggle="modal" id="edit" style="width: 150px; font-size: 20px;">Edit</button>
		<!-- <img src="<?php //echo BASE_URL_IMG;
						?>profile.jpg" id="img1">   -->
		<div id="func">
			<?php
			echo profile($sessionname, $conn);

			?>
		</div>
	</div>
	<div class="col-sm-4"></div>
	<br>
	<div class=" container-fluid row-lg-6 d1" style="margin-top: 22cm;">


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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(document).ready(function() {

			var loadData = function(type, category_id) {

				$.ajax({
					url: "load-cs.php",
					type: "POST",
					data: {
						type: type,
						id: category_id
					},
					success: function(data) {
						console.log(1);
						if (type == "stateData") {
							$("#state").html(data);
						} else if (type == "cityData") {
							$("#city").html(data);
						} else {
							$("#country").append(data);
						}

					}
				});
			}
			loadData();
			$("#country").on("click", function() {
				var country = $("#country").val();
				var countryName
				if (country != "") {
					loadData("stateData", country);

				} else {
					$("#state").html("");
				}

			});

			$("#state").on("click", function() {
				var state = $("#state").val();
				if (state != "") {
					loadData("cityData", state);

				} else {
					$("#city").html("");
				}

			});
			var print_city = function(id, city_id) {
				$.ajax({
					url: "load-cs.php",
					type: "POST",
					data: {
						type: "cityData",
						id: id
					},
					success: function(data) {
						// console.log(1);
						$("#city").html(data);

						document.getElementById('city').value = parseInt(city_id);
					}
				});
			}
			$("#edit").on("click", function() {
				var date = document.getElementById('fdate').getAttribute("data-id");
				document.getElementById('dob').value = date;
				var gender = document.getElementById('fgender').getAttribute("data-id");
				// var gender = document.getElementById('fgender').innerHTML.split('=')[1].split(";")[1];
				// console.log(gender);
				if (gender == "Male") {
					document.getElementById('genderm').checked = true;
					document.getElementById('genderf').checked = false;
				} else {
					document.getElementById('genderm').checked = false;
					document.getElementById('genderf').checked = true;
				}


				var address = document.getElementById('faddress').innerHTML.split(':')[1].split(";")[1];
				var phone = document.getElementById('fphone').innerHTML.split(':')[1].split(";")[1];

				var imageName = document.getElementById('img1').getAttribute("data-id");
				var country_id = document.getElementById('fcountry').getAttribute("data-id");
				var state_id = document.getElementById('fstate').getAttribute("data-id");
				var city_id = document.getElementById('fcity').getAttribute("data-id");
				document.getElementById('address').value = address;
				document.getElementById('phone').value = phone;
				// document.getElementById('dob').value = date;
				document.getElementById('country').value = parseInt(country_id);
				document.getElementById('img').value = imageName;
				// document.getElementById('file_image').value = imageName;


				if (country_id) {
					var id = parseInt(country_id)
					// console.log("call");
					$.ajax({
						url: "load-cs.php",
						type: "POST",
						data: {
							type: "stateData",
							id: id
						},
						success: function(data) {
							// console.log(1);
							$("#state").html(data);

							document.getElementById('state').value = parseInt(state_id);
							print_city(state_id, city_id);
						}
					});
					// console.log(2);
				}

				if (state_id) {
					var id = parseInt(state_id)
					// console.log("call");
					loadData("cityData", id);
				}
				document.getElementById('city').value = parseInt(city_id);
			});
		});
	</script>
</body>

</html>