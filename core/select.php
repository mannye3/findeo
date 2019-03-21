<?php
include('connect.php');
 $limit = 10;

$sql_fea_pro = "SELECT * FROM property WHERE status=1   ORDER BY RAND() LIMIT 0,4 ";
			$query_fea_pro  = mysqli_query($con, $sql_fea_pro);
			/*$row3 = mysqli_fetch_array($query3);*/

//Select Statement from property table(for Rent page)
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit; 
$sql_rent = "SELECT * FROM property WHERE  status=1 ORDER BY id ASC LIMIT $start_from, $limit ";
$query5  = mysqli_query($con, $sql_rent);
	

//Select Statement from users table(For Agent page)
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$sql_user = "SELECT * FROM users WHERE status=1 ORDER BY id ASC LIMIT $start_from, $limit ";
 $q_user = mysqli_query($con, $sql_user);


 ?>