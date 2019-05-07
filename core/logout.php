<?php
   require_once 'connect.php';
 	session_unset();
  session_destroy();

   echo "<script language='javascript' type='text/javascript'>
     window.location.href='../index.php';
                   </script>";

 exit();
   ?>