<?php
include('connect.php');

$state = $_POST['state'];

$sql2= "select * from states where name='$state'";
$query2 = mysqli_query($con, $sql2);
$res2 = mysqli_fetch_array($query2);
$state2 = $res2['state_id'];


$sql= "select * from locals where state_id='$state2'";
$query = mysqli_query($con, $sql);


while($res = $query->fetch_assoc()){
echo '<option value="'.$res['local_name'].'">'.$res['local_name'].'</option>';
	
}

?>