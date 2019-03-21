<?php

$pro = $_GET['pro'];

$sql_pro_d = "SELECT * FROM property WHERE property_no='$pro' ";
            $query_pro_d= mysqli_query($con, $sql_pro_d);
            $row_pro_d = mysqli_fetch_array($query_pro_d);
            $user =$row_pro_d["user_code"];
            $view =$row_pro_d["view"];


        $sql_pro_img = "SELECT * FROM pro_img WHERE property_no='$pro' ";
                $query9 = mysqli_query($con, $sql_pro_img);


                $sql_pro_img2 = "SELECT * FROM pro_img WHERE property_no='$pro' ";
                $query_pro_img2 = mysqli_query($con, $sql_pro_img2);


            $sql_ag_pic = "SELECT * FROM users WHERE user_code='$user' ";
            $query_ag_pic = mysqli_query($con, $sql_ag_pic);
            $row_ag_pic = mysqli_fetch_array($query_ag_pic);



if($pro =="")
{
echo "<script language='javascript' type='text/javascript'>

                        window.location.href='index.php';

                        </script>";
}



        $add_view = $view +1;

    $sql_view = "UPDATE property SET view='$add_view' WHERE property_no='$pro' ";
          $query_stat = mysqli_query($con, $sql_view);
            


?>