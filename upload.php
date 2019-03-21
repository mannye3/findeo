<?php
include('core/connect.php');
$target_dir = "uploads/"; // Upload directory
$property_no=$_SESSION['property_no']; 
$upload_date = date('jS \ F Y h:i:s A');

$request = 1;
if(isset($_POST['request'])){
	$request = $_POST['request'];
}

// Upload file
if($request == 1){
	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	$filename = $_FILES["file"]["name"]; 
	$msg = "";
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {

		 $sql = "INSERT INTO `pro_img`(`pic`, `property_no`,`num`, `status`, `upload_date`) VALUES ('".$filename."','".$property_no."','1','1','".$upload_date."')";
          $query = mysqli_query($con, $sql);

	    $msg = "Successfully uploaded";
	}else{
	    $msg = "Error while uploading";
	}
	echo $msg;
}

// Remove file
if($request == 2){
	$filename = $target_dir.$_POST['name'];
	$filename2 = $_POST['name'];

	$sql2 ="DELETE  FROM  imgtest WHERE name='".$filename2."' ";
	$query2 =mysqli_query($con, $sql2); 
	unlink($filename); exit;
}
