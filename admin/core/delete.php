<?php
require_once('connect.php');
		$sql ="DELETE FROM  property WHERE property_no=".$_GET['pro'];
			$query =mysqli_query($con, $sql);


			$sql2 ="DELETE FROM  pro_img WHERE property_no=".$_GET['pro'];
			$query2 =mysqli_query($con, $sql2);


			echo "<script language='javascript' type='text/javascript'>

  					window.location.href='../properties.php';

                        </script>";


?>