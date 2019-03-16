	<?php include('core/search.php'); 
	
	?>
		

				<!-- Listing Item -->
				  <?php
              while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
              {
                
              ?>
				<p><?php echo $row["title"]; ?></p>
				     <?php
}
?>
				