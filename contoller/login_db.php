<?php
$num = "";
$conn = "";
$a1 = "";
$inputname = "";
$inputpass = "";
if( $_SERVER['REQUEST_METHOD'] =='POST' ){
  $inputname = $_POST["uname"];
  $inputpass = $_POST["pass"];     // for encrypt password
  // $inputpass = md5($_POST["pass"]);     // for encrypt password
  // $inputpass = base64_encode($_POST["pass"]);     // for encrypt password
include_once '../config/config.php';
include CONFIG_PATH.'connectivity.php';
include MODEL_PATH.'query_model.php';
if(login($inputname, $inputpass, $conn)){
// if($num == 1){
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['name'] = $inputname;
  header("location: home.php");
  // $login = 'hello';
}else {
// $login = 'world';
$a1= '<div class="alert alert-danger" alert="dismissible fade" role="alert">
		<strong>Error! </stronge> Please enter correct Username and Password.
		<button type= "button" class ="close" data-dismiss="alert" arial-label="Close">
		<span arial-hidden="true"></span>
    </button></div>';
}
}
?>