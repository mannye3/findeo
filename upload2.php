<?php
//upload.php
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . '.' . $ext;
 $location = 'upload2/' . $name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);

 $sql = "UPDATE users SET image='".$name."' WHERE email='$user_check' ";
          $query = mysqli_query($con, $sql);
 // echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';



 echo "<script language='javascript' type='text/javascript'>

                        window.location.href='my-profile.php';

                        </script>";
}
?>
