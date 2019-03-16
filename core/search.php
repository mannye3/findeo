<?php
include('connect.php');
  if(isset($_POST["location"]) OR isset($_POST["type"])  )
    {
        $p_location = $_POST["location"];

        $p_type = $_POST["type"];
    }
    if(isset($_GET["location"]) OR isset($_GET["type"]) )
    {
        $p_location = $_GET["location"];

        $p_type = $_GET["type"];
    }




$sql = "SELECT * FROM property WHERE  (`address` LIKE '%".$p_location."%' OR `state` LIKE '%".$p_location."%' OR `lga` LIKE '%".$p_location."%') AND (`type` LIKE '%".$p_type."%') ";
    $query = mysqli_query($con,$sql);

    $num_rows = mysqli_num_rows($query);

    $per_page = 1;   // Per Page
    $page  = 1;
    
    if(isset($_GET["Page"]))
    {
        $page = $_GET["Page"];
    }

    $prev_page = $page-1;
    $next_page = $page+1;

    $row_start = (($per_page*$page)-$per_page);
    if($num_rows<=$per_page)
    {
        $num_pages =1;
    }
    else if(($num_rows % $per_page)==0)
    {
        $num_pages =($num_rows/$per_page) ;
    }
    else
    {
        $num_pages =($num_rows/$per_page)+1;
        $num_pages = (int)$num_pages;
    }
    $row_end = $per_page * $page;
    if($row_end > $num_rows)
    {
        $row_end = $num_rows;
    }

    $sql .= " ORDER BY id ASC LIMIT $row_start ,$row_end ";
    $query = mysqli_query($con,$sql);



?>
