<?php

  if ($row_agent['image'] ==""){
   echo '<img src="images/user.jpg" />';
   }  


   elseif ($row_agent['image'] !=="") {

   	 echo '<img  src="profile-pic/'.$row_agent['image'].'">';
     	
     }  


?>