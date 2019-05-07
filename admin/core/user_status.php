<?php
require_once('connect.php');

		$sql ="SELECT status FROM users WHERE id='".$_GET['id']."'";
			$query = mysqli_query($con, $sql);
			$rw= mysqli_fetch_array($query);


			if($rw['status'] == 0){

				$sql = "UPDATE users SET status = 1 WHERE id=".$_GET['id'];
				$query = mysqli_query($con, $sql);

				header('Location: ../users.php');


				}

			else{

				$sql= "UPDATE users SET status = 0 WHERE id=".$_GET['id'];

				$query= mysqli_query($con, $sql);



				header('Location: ../users.php');

			}





?>