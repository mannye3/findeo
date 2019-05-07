<?php
$sql12 ="SELECT SUM(num) AS approve FROM property WHERE user_code='$user' AND status=1 ";
	$query12 =mysqli_query($con, $sql12);
	$rw12 =mysqli_fetch_array($query12);
		$approve = $rw12['approve'];



	$sql13 ="SELECT SUM(num) AS review FROM property WHERE user_code='$user' AND status=0 ";
		$query13 =mysqli_query($con, $sql13);
		$rw13 =mysqli_fetch_array($query13);
			$review = $rw13['review'];


		$sql14 ="SELECT SUM(num) AS total_p FROM property WHERE user_code='$user' ";
		$query14 =mysqli_query($con, $sql14);
		$rw14 =mysqli_fetch_array($query14);
			$total_p = $rw14['total_p'];



?>