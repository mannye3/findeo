<?php

  if ($row['image'] ==""){
   echo '<img src="images/user.jpg" />';
   }  


   elseif ($row['image'] !=="") {

   	 echo '<img  src="profile-pic/'.$row['image'].'">';
     	
     }  


?>