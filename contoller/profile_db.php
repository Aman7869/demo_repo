<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 include_once '../config/config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include CONFIG_PATH.'connectivity.php';
	// include '/var/www/html/Task/config/connectivity.php';
	if(empty($_POST["phone"])){
	 $phoneErr = "phone is required";
						}
	else {
	 $phone = $_POST["phone"];
	
		 }
	if(empty($_POST["address"])){
	 $AddErr = "address is required";
						}
	else {
	 $address = $_POST["address"];
	
		}
	if(empty($_POST["dob"])){
	 $dobErr = "dob is required";
						}
	else {
	 $dob = $_POST["dob"];
	
		}
		$img = $_POST['img'];
		if(isset($_FILES['file'])){
		$files = $_FILES['file'];
		$filename = $files['name'];
		$fileerror = $files['error'];
		$filetmp = $files['tmp_name'];

		// for check extension 
		$fileext = explode('.', $filename);
		$filecheck = strtolower(end($fileext));
		$fileextstored = array('png','jpg', 'jpeg');
		if(in_array($filecheck, $fileextstored)) {
			$destinationfile = "../images/" . $filename;
			// $destinationfile = IMAGE_PATH.$filename;
			move_uploaded_file($filetmp, $destinationfile);
			} else{
				$destinationfile = $img;
			}


		}else {
				echo '<script>alert("file extension is not found ! please check correct extension..");document.location.href="../views/profile.php";</script>';
				exit();
			}
		

		if(empty($_POST["gender"])){
		$genderErr = "gender is required";
							}
		else {
		$gender = $_POST["gender"];
		
			}
		if(empty($_POST["country"])){
		$countryErr = "country is required";
							}
		else {
		$input_country = $_POST["country"];
		
			}
		if(empty($_POST["state"])){
		$stateErr = "state is required";
							}
		else {
		$input_state = $_POST["state"];
		
			}
		if(empty($_POST["city"])){
		$cityErr = "city is required";
							}
		else {
			$input_city = $_POST["city"];
			
				}

		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data); 
		return $data;
		}


	  $sql = "UPDATE `userInformation` SET  `date_of_birth` ='$dob', `gender` = '$gender', `country` = '$input_country', `state` = '$input_state', `city` = '$input_city', `phone` = '$phone', `address` = '$address', `imagePath` = '$destinationfile' WHERE `name` = '$sessionname';";
		$result = mysqli_query($conn, $sql);


	  if($result) {
	    echo '<script>alert("Data submitted successfully");document.location.href="../views/profile.php";</script>';

	       
					}

}
?>