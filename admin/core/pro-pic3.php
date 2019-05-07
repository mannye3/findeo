<?php
 if ($row7['image'] =="" and $row7['ImageUrl'] =="" and $row7['fbid'] =="" ){
   echo '<img src="../img/user.jpg" class="rounded-circle" />';
   }  


   elseif ($row7['image'] =="" and $row7['ImageUrl'] !=="" ) {

   	 echo '<img src="'.$row7['ImageUrl'].'" class="rounded-circle"  />';
     	
     }  


     elseif ($row7['image'] !=="" and $row7['ImageUrl'] !=="" ) {

   	 echo '<img src="../upload/profile/'.$row7['image'].'" class="rounded-circle" />';
     	
     }



     elseif ($row7['image'] ==""  and $row7['fbid'] !==""  ) {

   	 echo '<img src="https://graph.facebook.com/'.$row7['fbid'].'/picture" class="rounded-circle" />';
     	
     }  


     elseif ($row7['image'] !=="" and $row7['fbid'] !=="" ) {
	 echo '<img src="../upload/profile/'.$row7['image'].'" class="rounded-circle"  />';
     	
     }




   
?>