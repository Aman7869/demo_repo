<?php


$result1 = "";
$result = "";
$existSql = "";
$er = "";
$numExistRows = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(empty($_POST["myName"])){
		$nameErr ="Name is requered";
		
	}
	else {

		$uname = $_POST["myName"];
			}


	if(empty($_POST["email"])){
		$emailErr = "email is requered";
							}
	else {

		$email = $_POST["email"];
		
	}
	if(empty($_POST["pass"])){
	$passErr = "Password is requered";
						}
else {
	$pass = $_POST["pass"];
	// $pass = md5($_POST["pass"]);
	
}

if(empty($_POST["dob"])){
	$dobErr = "dob is requered";
						}
else {
	$dob = test_input($_POST["dob"]);
	
}
if(empty($_POST["gender"])){
	$genderErr = "gender is requered";
						}
else {
	$gender = test_input($_POST["gender"]);
	
}

include_once '../config/config.php';
include CONFIG_PATH.'connectivity.php';
include MODEL_PATH.'query_model.php';

if(signup($uname, $email, $pass, $dob, $gender, $conn)){

echo'<script>alert("Data submitted successfully");document.location.href="../views/login.php";</script>';
} else {
$a2 = '<div class="alert alert-danger" alert="dismissible fade" role="alert">
	<strong>Error! </stronge>Data has not been submitted !
	<button type= "button" class ="close" data-dismiss="alert" arial-label="Close">
	<span arial-hidden="true"></span>
</button></div>';
$er ='Username is already exist';
}

}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
