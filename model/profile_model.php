<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '/var/www/html/Task/config/connectivity.php';
    $pname = "";
	$ppassword = "";
	$pemail   = "";
	$pdob = "";
	$pgender = "";

 $sql = "SELECT * from `userinformation` WHERE name = '$sessionname';";
$result = mysqli_query($conn, $sql);

$info = mysqli_num_rows($result);

if($info > 0) {

	$row = mysqli_fetch_assoc($result);
// while($row = mysqli_fetch_assoc($result)){
	$pname = $row["name"];
	$ppassword = $row["password"];
	$pemail = $row["email"];
	$pdob = $row["date_of_birth"];
	$pgender = $row["gender"];
// }
}
?>