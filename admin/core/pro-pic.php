<?php

  if ($row4['image'] =="" and $row4['ImageUrl'] =="" and $row4['fbid'] =="" ){
   echo '<img src="../img/user.jpg" width="150" height="150" />';
   }  


   elseif ($row4['image'] =="" and $row4['ImageUrl'] !=="" ) {

   	 echo '<img src="'.$row4['ImageUrl'].'" width="150" height="150"  />';
     	
     }  


     elseif ($row4['image'] !=="" and $row4['ImageUrl'] !=="" ) {

   	 echo '<img src="../upload/profile/'.$row4['image'].'" width="150" height="150" />';
     	
     }



     elseif ($row4['image'] ==""  and $row4['fbid'] !==""  ) {

   	 echo '<img src="https://graph.facebook.com/'.$row4['fbid'].'/picture" width="150" height="150"  />';
     	
     }  


     elseif ($row4['image'] !=="" and $row4['fbid'] !=="" ) {
	 echo '<img src="../upload/profile/'.$row4['image'].'" width="150" height="150"  />';
     	
     }




   
?>