<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once '../config/config.php';
include CONFIG_PATH.'connectivity.php';
$print = "";
$info = "";
$tittle = "";
$desc = "";
$image = "";
function displayInfo($conn){

	$limit = 4;
	if(isset($_GET['page'])){
	$page = $_GET['page'];

	} else {
		$page = 1;
	}
	$offset = ($page - 1)* $limit;
	$sql = "SELECT * FROM `Article` WHERE status = 'active' LIMIT {$offset}, {$limit}";
	$result = mysqli_query($conn, $sql);
	$sno=0;
	$info = mysqli_num_rows($result);
		if($info > 0){
		  while($row = mysqli_fetch_assoc($result)) {

			
			if($row["imagePath"]){
				$images = "<p>{$row["imagePath"]}</p>";
				$finalimage = explode('/', $images);
				$imagepath = ($finalimage)[6];
				$imagename = explode('<', $imagepath)[0];
			
			
			} else {
				
				$imagename = "profile.jpg";
			}
	  
				$value = $row["alias"];

				
				$string = $row["description"];
				if (strlen($string) > 200) {

						   
					$stringCut = substr($string, 0, 200);
					$endPoint = strrpos($stringCut, ' ');
					$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
					$string .= '... <a href="article.php?q='.$value.'" data-toggle="tooltip" data-placement="right" title="Click!" class = "link">Read more</a>';;
				}

	
					echo '<div class="container d-flex my-5">
						<div class ="col-sm-2">
						<img src="../images/thumbnail_120x120/'.$imagename.'" class= "img">
						</div>
						<div class="col-sm-6 tittle">
						<h2><a href="article.php?q='.$value.'" data-toggle="tooltip" data-placement="right" title="Click!" class = "link">'.$row["tittle"].'</a></h2>
						<p>'.$string.'</p>
						</div>
					</div>';
				
			}

			}

			// for pagination
			$sql1 = "SELECT * FROM `Article`";
			$result1 = mysqli_query($conn, $sql1);
			$info1 = mysqli_num_rows($result1);
			if($info1 > 0) {

			
				$totalRecords = $info1;
				$totalPage = ceil($totalRecords / $limit);
				echo '<ul class = "pagination admin-pagination" style = "margin-left: 41%;">';
				if($page > 1) {

					echo '<li><a href = "category.php?page='.($page - 1).'" style = "color: black;">Prev</a></li>';
				}
				for($i = 1; $i <= $totalPage; $i++) {
					if($i == $page){
					   $active = "active";
					} else {
					   $active  = "";
					}
					 echo '<li class = "'.$active.'"><a href = "category.php?page='.$i.'" style = "color: black;">'.$i.'</a></li>';
					}

					if($totalPage > $page) {

						echo '<li style = "color: black;"><a href  = "category.php?page='.($page + 1).'" style = "color: black;">Next</a></li>';
				}
						
						echo '</ul>';

}

}

	function article($alias, $conn){
		$sql = "SELECT * FROM `Article` WHERE `alias` = '$alias'";
		$result = mysqli_query($conn, $sql);
		$info = mysqli_num_rows($result);
			if($info > 0) {
				$row = mysqli_fetch_assoc($result);

					if($row["imagePath"]){
						$images = "<p>{$row["imagePath"]}</p>";
						$finalimage = explode('/', $images);
						$imagepath = ($finalimage)[6];
						$imagename = explode('<', $imagepath)[0];
			
			
					} else {
						
						$imagename = "profile.jpg";
					}
		  
									
						echo '<div class="container d-flex category">
								<div class ="col-sm-2">
								<img src="../images/thumbnail_400x400/'.$imagename.'"</" class= "img">
								</div>
								<div class="col-sm-6 tittle">
								<h1>'.$row["tittle"].'</h1>
								<p>'.$row["description"].'</p>
								<p>Created at : '.$row["tstamp"].'</p>
								</div>
								</div>';
		

		}

		}

?>