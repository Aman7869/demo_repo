<?php
$result1 = "";
$result = "";
$existSql = "";
$er = "";
$numExistRows = "";
$sql = "";
$num = "";
$conn = "";
include '../config/connectivity.php';
//signup code
function signup($uname, $email, $pass, $dob, $gender, $conn) {
		
		$existSql = "SELECT * from `userinformation` WHERE 	name = '$uname'";
		$result1 = mysqli_query($conn, $existSql);
		if($result1){
		$numExistRows = mysqli_num_rows($result1);


		if($numExistRows > 0){
		$exists = true;
		}else {
		$er ='Username is already exist';
		$exists = false;
		}
	}

     
$sql = "INSERT INTO `userInformation`(`id`, `name`, `email`, `password`, `date_of_birth`,
		`gender`, `status`) VALUES (NULL, '$uname', '$email', '$pass', '$dob', '$gender',1);";
		$result = mysqli_query($conn, $sql);
	
	return $result;
}

//Login code

function login($inputname, $inputpass, $conn) {
	// echo $inputname, $inputpass; die;
	if($inputpass == "1660ee5e933f546c2c272195420ff71c"){
		echo "Inside condtion";die;
	}
$sql = "SELECT * FROM  userInformation WHERE name ='$inputname' and password = '$inputpass';";
$result = mysqli_query($conn, $sql);
// echo $result; die;
$num = mysqli_num_rows($result);

	return $num;
}
// profile code
	
function profile($sessionname, $conn) {
	$pname = "";
	$ppassword = "";
	$pemail   = "";
	// $pdob = "";
	$pgender = "";
	$info1 = "";
	$info2 ="";
	$info3 ="";
	$pcountry="";
	$pstate="";
	$pcity= "";
	$pphone = "";
	$paddress = "";
	$sql = "SELECT * from `userinformation` WHERE name = '$sessionname';";
	$result = mysqli_query($conn, $sql);
	$info = mysqli_num_rows($result);
	if($info > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$pdob =  "<p id = 'fdate' data-id = '{$row['date_of_birth']}'>  Date of Birth &nbsp  : &nbsp{$row["date_of_birth"]}</p>";
	// for printing country, state, city names
	if($row["country"] != Null){
			$country_print = "SELECT * from countryinformation where cid = {$row["country"]};";
			$state_print = "SELECT * from stateinformation where sid = {$row["state"]};";
			$city_print = "SELECT * from cityinformation where city_id = {$row["city"]};";
			$result3 = mysqli_query($conn, $country_print);
			$result4 = mysqli_query($conn, $state_print);
			$result5 = mysqli_query($conn, $city_print);
			if($result3 && $result4 && $result5){
				$info1 = mysqli_num_rows($result3);
				$info2 = mysqli_num_rows($result4);
				$info3 = mysqli_num_rows($result5);
			}
		}
	
	if($info1> 0){
	$row1= mysqli_fetch_assoc($result3);
	$pcountry =  "<p id ='fcountry' data-id= '{$row1["cid"]}'> Country &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp{$row1["cname"]}</p>";
	}
	if($info2> 0){
	$row2= mysqli_fetch_assoc($result4);
	$pstate =  "<p id = 'fstate' data-id = '{$row2["sid"]}'> State &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp{$row2["sname"]}</p>";
	}
	if($info3> 0){
	$row3= mysqli_fetch_assoc($result5);
	$pcity =  "<p id = 'fcity' data-id = '{$row3["city_id"]}'> City &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp : &nbsp{$row3["city_name"]}</p>";
	}

	if($row["imagePath"]){
	// $images = "<p>{$row["imagePath"]}</p>";
	// $finalimage = explode('/', $images);
	// $imagepath = ($finalimage)[6];
	// $imagename = explode('<', $imagepath)[0];
	// $image = "<img src='../images/{$row["imagePath"]}' id='img1' data-id='{$imagename}'>";
	$image = "<img src='../images/{$row['imagePath']}' id='img1' data-id='{$row["imagePath"]}'>";
	
	} else {
		$image = "  <img src='../images/profile.jpg' id='img1'> ";
	}
	$pname =  "<p id='pname'> Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp{$row["name"]}</p>";
	$pemail = "<p> Email&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp {$row["email"]}</p>";
	if($row["phone"]) {
	$pphone =  "<p id = 'fphone'> Phone.no &nbsp &nbsp &nbsp &nbsp: &nbsp{$row["phone"]}</p>";
	}
	if($row["address"]){
	$paddress =  "<p id = 'faddress'> Address &nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp{$row["address"]}</p>";
	}
	// $pdob =  "<p id = 'fdate' data-id = '{$row['date_of_birth']}'>  Date of Birth &nbsp  : &nbsp{$row["date_of_birth"]}</p>";
	$pgender =  "<p id = 'fgender' data-id = '{$row["gender"]}'> Gender &nbsp &nbsp &nbsp &nbsp &nbsp  : &nbsp{$row["gender"]}</p>";

echo $image;
echo $pname;
echo $pemail;
echo $pphone;
echo $paddress;
echo $pdob;
echo $pgender;
echo $pcountry;
echo $pstate;
echo $pcity;
	
		
}
}
}
