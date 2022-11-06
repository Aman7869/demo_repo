<?php
include_once '../config/config.php';
include CONFIG_PATH.'connectivity.php';
// include '/var/www/html/Task/config/connectivity.php';
if($_POST['type']=="") {
	$sql = "select * from countryInformation";
	
	$query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
	$str = "";
	while($row =mysqli_fetch_assoc($query)) {
	$str .="<option value = '{$row['cid']}'>{$row['cname']}</option>";
	}

	} else if($_POST['type']=="stateData") {
	$sql = "select * from stateInformation where country =  {$_POST['id']}";
	
	$query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
	$str = "";
	while($row =mysqli_fetch_assoc($query)) {
	$str .="<option value = '{$row['sid']}'>{$row['sname']}</option>";
	}

	} else if($_POST['type']=="cityData") {
		$sql = "select * from cityInformation where state_id =  {$_POST['id']}";
	
	$query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
	$str = "";
	while($row =mysqli_fetch_assoc($query)) {
	$str .="<option value = '{$row['city_id']}'>{$row['city_name']}</option>";
	}
	}
	echo $str;
?>