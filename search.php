<?php include('core/search.php'); 
	include('inc/header.php'); 
	?>



<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="images/place.jpg"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row_sear_pro">
				<div class="col-md-12">

					<h2>Listings</h2>
					<span><?php echo $num_rows;?> Properties found for <?php echo $p_location ?></span>
					
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Listings</li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row_sear_pro sticky-wrapper">

		<div class="col-md-8">

			<!-- Main Search Input -->
			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				  <?php
              while($row_sear_pro=mysqli_fetch_array($query_sear_pro,MYSQLI_ASSOC))
              {
                 $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row_sear_pro["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
              ?>
				<div class="listing-item">

					<a href="property.php?pro=<?php echo $row_sear_pro["property_no"]; ?>" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">For <?php  echo ucwords($row_sear_pro["purpose"]) ?></span>
							
						</div>

						<div class="listing-badges2">
							<span class="featured"><img style="width: 170px;" src="images/watermark.png" ></span>
							
						</div>

						<div class="listing-img-content">
							<span class="listing-price">₦<?php  echo number_format($row_sear_pro["price"]).""; ?></span>  

							<span  style="float: right;"><?php echo $t_img ?> <i class="fa fa-image"></i></span>
							
							
						</div>

						<img src="uploads/<?php echo $row_sear_pro["pic"]; ?>" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="property.php?pro=<?php echo $row_sear_pro["property_no"]; ?>"><?php echo $row_sear_pro["title"]; ?></a></h4>
							
								<i class="fa fa-map-marker"></i>
								<?php echo $row_sear_pro["address"]; ?>. <?php echo $row_sear_pro["lga"]; ?>, <?php echo $row_sear_pro["state"]; ?>
							

							<a href="property.php?pro=<?php echo $row_sear_pro["property_no"]; ?>" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							
							<li><?php echo $row_sear_pro["rooms"]; ?> Bedroom</li>
							<li><?php echo $row_sear_pro["bathrooms"]; ?> Bathroms</li>
							<li>Type: <?php echo $row_sear_pro["type"]; ?> </li>
							
						</ul>

						<div class="listing-footer">
							<!-- <a href="#"><i class="fa fa-user"></i> Chester Miller</a> -->
							<span><i class="fa fa-eye"></i><?php echo $row_sear_pro["view"]; ?> views</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				     <?php
}
?>
				<!-- Listing Item / End -->
<?php  echo $error ?>


			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination pagination-next-prev">
					<ul>
						
						 <?php
          if($prev_page)
          {
            echo "
            <a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page&location=$p_location&type=$p_type' class='prev'><button class='button'>Prev</button></a> ";
          }

          for($i=1; $i<=$num_pages; $i++){
            if($i != $page)
            {
              // echo "<a href='$_SERVER[SCRIPT_NAME]?Page=$i&location=$p_location&type=$p_type' class=''>$i</a>";
            }
            else 
            {
              // echo "<span class='current-page'><b> $i </b></span>";
            }
          }
          if($page!=$num_pages)
          {
            echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page&location=$p_location&type=$p_type'  class='next'><button class='button'>Next</button></a> ";
          }
          $conn = null;
          ?>
					</ul>
				</nav>

				
			</div>
			<!-- Pagination / End -->

			

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-md-4">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<form method="get" action="search.php">
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Change Your Search</h3>

					<!-- Row_sear_pro -->
					<div class="row_sear_pro with-forms">
						<!-- Status -->
						<div class="col-md-12">
							<input type="text" value="<?php echo $p_location;?>" name="location" id="autocomplete" onFocus="geolocate()" placeholder="Where do you want to live?" />
						</div>
					</div>
					<!-- Row_sear_pro / End -->


					<!-- Row_sear_pro -->
					<div class="row_sear_pro with-forms">
						<!-- Type -->
						<!-- <div class="col-md-12"> -->
						<!-- <select data-placeholder="Any Type" name="type" class="chosen-select-no-single" >
								<option value="Bungalow">Bungalow</option>
		                         <option value="Duplex">Duplex</option>
		                          <option value="Flat">Flat</option>
		                           <option value="House">House</option>
		                            <option value="Industrial Building">Industrial Building</option>
		                             <option value="Office">Office Space</option>
		                              <option value="Land">Land</option>
		                              <option value="Shop">Shop/Showroom</option>
		                              <option value="Store Room">Store Room</option>
		                            <option value="Warehouse">Warehouse</option>	
								</select>
													</div> -->
					<!-- </div> -->
					<!-- Row_sear_pro / End -->

					<button class="button fullwidth margin-top-30" type="submit" name="search">Search</button>
				</div>
			</form>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>


<?php include('inc/footer.php'); ?>