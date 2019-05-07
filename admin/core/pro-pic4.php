<?php

  if ($rw2['image'] ==""){
   echo '<img src="../images/user.jpg" />';
   }  


   elseif ($rw2['image'] !=="") {

     echo '<img style="height: 120px; width: 120px;" src="../profile-pic/'.$rw2['image'].'">';
      
     }  


?>