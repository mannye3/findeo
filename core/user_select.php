<?php

//// SELECT QUERY FROM STUDENTS TABLE  FOR  DASHBOARD AND STUDENTS PAGES ////
$st = "SELECT DISTINCT state FROM statelga";
$stlg = mysqli_query($con, $st);



/// SELECT QUERY FROM STUDENTS TABLE  FOR  DASHBOARD AND STUDENTS PAGES ////
$user_pro = "SELECT * FROM property WHERE email='$user_check' ORDER BY id DESC ";
$q_u_pro = mysqli_query($con, $user_pro);


 ?>