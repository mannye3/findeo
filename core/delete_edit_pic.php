<?php
require_once('connect.php');
		$sql ="DELETE FROM  pro_img WHERE id=".$_GET['id'];
			$query =mysqli_query($con, $sql);
			header('Location: ../edit-pictures.php?pro='.$_GET['pro']);


?>