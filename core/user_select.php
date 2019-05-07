<?php

//// SELECT QUERY FOR STATE DROPDOWN ON EDIT PFOFILE PAGE ////
$st = "SELECT DISTINCT * FROM states";
$stlg = mysqli_query($con, $st);



/// SELECT QUERY FROM STUDENTS TABLE  FOR  DASHBOARD AND STUDENTS PAGES ////
$user_pro = "SELECT * FROM property WHERE email='$user_check' ORDER BY id DESC ";
$q_u_pro = mysqli_query($con, $user_pro);


 ?>