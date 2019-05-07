<?php

  if ($row['image'] =="" ){
   echo '<img src="assets/img/admin.jpg" style="height: 100px; width: 100px;" class="rounded-circle" />';
   }    


   elseif ($row['image'] !=="" ) {

     echo '<img src="pictures/'.$row['image'].'" style="height: 100px; width: 100px;" class="rounded-circle">';
      
     }
?>
