<?php

  if ($row['image'] ==""){
   echo '<img src="images/user.jpg" />';
   }  


   elseif ($row['image'] !=="") {

   	 echo '<img style="height: 120px; width: 120px;" src="profile-pic/'.$row['image'].'">';
     	
     }  


?>