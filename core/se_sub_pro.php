<?php
require_once('connect.php');
ini_set('display_errors', '0');         # don't show any errors...
error_reporting(E_ALL | E_STRICT);
$user_check=$_SESSION['email'];		
$sql = "SELECT * FROM users WHERE email='$user_check' ";
$query 	= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);



if(!isset($user_check))
{
echo "<script language='javascript' type='text/javascript'>

      window.location.href='login-register.php';

       </script>";
}




?>