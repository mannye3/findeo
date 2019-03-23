<?php

$agent = $_GET['agent'];

$sql_agent = "SELECT * FROM users WHERE user_code='$agent'";
$query_agent  = mysqli_query($con, $sql_agent);
$row_agent =  mysqli_fetch_assoc($query_agent);


$sql_ag_pro = "SELECT * FROM property  WHERE user_code='$agent'";
            $query_ag_pro = mysqli_query($con, $sql_ag_pro);



if($agent =="")
{
echo "<script language='javascript' type='text/javascript'>

                        window.location.href='agents.php';

                        </script>";
}

?>