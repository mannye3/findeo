<?php
require_once('connect.php');
		$sql ="DELETE FROM  users WHERE id=".$_GET['id'];
			$query =mysqli_query($con, $sql);
			header('Location: ../users.php');


?>