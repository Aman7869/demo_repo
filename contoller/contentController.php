<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../config/config.php';
include CONFIG_PATH.'connectivity.php';

$print = "";
$info = "";
	
  		
  		function info($sno, $conn) {
  		$sql = "select * from Article where `Article`.`sno` = '$sno';";
		$result = mysqli_query($conn, $sql);
		$info = mysqli_num_rows($result);
			if($info > 0){
				$row = mysqli_fetch_assoc($result);
				$img = $row['imagePath'];
				echo $img;
			
			
}

}

	$sql = "SELECT * FROM `Article`";
	$result = mysqli_query($conn, $sql);
	$sno = 0;
	$info = mysqli_num_rows($result);
		if($info > 0){
			while($row = mysqli_fetch_assoc($result)) {
			$sno= $sno + 1;
				
			"<p id='d11'>".$row['description']."</p>";

			$description = $row["description"];
			$fullDescription = $row["description"];
			if (strlen($description) > 50) {
	   			$stringCut = substr($description, 0, 50);
				$endPoint = strrpos($stringCut, ' ');
				$description = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
				$description .= '... read more';
				}
				

				$print .= " <tr>
				<th scope='row'>{$sno}</th>
				<td data-image = '{$row['imagePath']}'>{$row['tittle']}</td>
				<td data-attr='".$fullDescription."'>".$description."</td>
				<td>{$row['tstamp']}</td>
				<td>{$row['updated']}</td>
				<td>{$row['status']}</td>
				<td><button class =' edit btn btn-sm btn-primary' id = 
				'{$row['sno']}'>Edit</button> <button class =' delete btn btn-sm btn-primary'id =d".$row['sno'].">Delete</button></td>
			             </tr>";
			    $image = "<p id = 'img'>{$row['imagePath']}</p>";
			        

			}
}

if(isset($_GET['delete'])) {
	$sno = $_GET['delete'];
	$sql1 = "SELECT * from `Article` where `sno`='$sno'";
	$result1 = mysqli_query($conn, $sql1)or die("Query Unsuccessful. select");
	$row = mysqli_fetch_assoc($result1);
	unlink($row['imagePath']);

	$images = "<p>{$row["imagePath"]}</p>";
	$finalimage = explode('/', $images);
	$imagepath = ($finalimage)[6];
	$imagename = explode('<', $imagepath)[0];
	unlink('../images/thumbnail_120x120/'.$imagename);
	unlink('../images/thumbnail_400x400/'.$imagename);

	$sql = "DELETE from `Article` where `sno`='$sno'";

	$result = mysqli_query($conn, $sql)or die("Query Unsuccessful.");
	if($result) {
		$alert =  '<div class="alert alert-success" role="alert">
  					Data deleted successfully !</div>';
		 	header("location: ../views/contentPage.php");
		
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST["snoEdit"])) {


		$sno = $_POST["snoEdit"];
		$tittle = $_POST["tittleEdit"];
		$description = $_POST["descriptionEdit"];
		$imageText = $_POST["img"];
		if(isset($_FILES['image'])) {
			$files = $_FILES['image'];
			$filename = $files['name'];
			$fileerror = $files['error'];
			$filetmp = $files['tmp_name'];
			$filetmp1 = $files['tmp_name'];
			// for check extension 
			$fileext = explode('.', $filename);
			$filecheck = strtolower(end($fileext));
			$fileextstored = array('jpg', 'jpeg');

		if(in_array($filecheck, $fileextstored)) {
			$destinationfile = IMAGE_PATH.$filename;
			move_uploaded_file($filetmp, $destinationfile);
			copy($destinationfile, IMAGE_PATH.'original_'.$filename );

			$thumnailPath1 = IMAGE_PATH.'thumbnail_120x120';
			$thumnailPath2 = IMAGE_PATH.'thumbnail_400x400';
			$resize_image = IMAGE_PATH.$filename;

			if (! is_dir($thumnailPath1) ) {
    			mkdir($thumnailPath1, 0755, true);
				} 


			if (! is_dir($thumnailPath2) ) {
    			mkdir($thumnailPath2, 0755, true);
				}


			if ( is_dir($thumnailPath1) )	{
				list( $width,$height ) = getimagesize( $destinationfile);
				$newwidth = 120;
				$newheight = 120;
				$thumb = imagecreatetruecolor( $newwidth, $newheight );
				$source = imagecreatefromjpeg( $resize_image );
				imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				imagejpeg( $thumb, $resize_image, 100 ); 
				copy($resize_image, IMAGE_PATH.'thumbnail_120x120/'.$filename);
					} 
				

			if ( is_dir($thumnailPath2) )	 {
				list( $width,$height ) = getimagesize( $destinationfile);
				$newwidth = 400;
				$newheight = 400;
				$thumb = imagecreatetruecolor( $newwidth, $newheight );
				
				$source = imagecreatefromjpeg( $resize_image );
				imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				imagejpeg( $thumb, $resize_image, 100 );
				copy($resize_image, IMAGE_PATH.'thumbnail_400x400/'.$filename); 
				
				}


			} else {
				$destinationfile = $imageText;
			}

			} else {
				echo '<script>alert("file extension is '.$destinationfile.'not found ! please check correct extension..");document.location.href="../views/contentPage.php";</script>';
				exit();
			}


	$alias = $_POST["aliasEdit"];
	$status = $_POST["status"];
	$date_time  = date("Y-m-d h:i:s");
	
	$sql = "UPDATE `Article` SET `tittle` = '$tittle', `description` = '$description' 
	,`updated`= '$date_time', `alias` = '$alias', `status` = '$status', `imagePath` = '$destinationfile' WHERE `Article`.`sno` = '$sno';";
	$result = mysqli_query($conn, $sql);
			if($result) {
							header("location: ../views/contentPage.php");
				$alert =  '<div class="alert alert-success" role="alert">
  							Data updated successfully !
							</div>';
		
			} else {
					$alert = '<div class="alert alert-danger" role="alert">
 					 Data has not been updated !</div>';
					
					}
	} else{
		    $tittle = $_POST["tittle"];
			
			$sql = "INSERT INTO `Article` (`tittle`) VALUES ( '$tittle');";
			$result = mysqli_query($conn, $sql);
				
				if($result) {
				  header("location: ../views/contentPage.php");
				  


							} else {
								echo '<script>alert("Data has not been submitted, Information is already exist");document.location.href="../views/contentPage.php";</script>';
							}
}
}

?>