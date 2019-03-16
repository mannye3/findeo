<?php include('core/search.php'); 
	include('inc/header.php'); 
	?>



<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="images/listings-parallax.jpg"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>Listings</h2>
					<span>Grid Layout With Sidebar</span>
					
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
	<div class="row sticky-wrapper">

		<div class="col-md-8">

			<!-- Main Search Input -->
			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				  <?php
              while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
              {
                 $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
              ?>
				<div class="listing-item">

					<a href="single-property-page-1.html" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured"><?php  echo ucwords($row["type"]) ?></span>
							
						</div>

						<div class="listing-img-content">
							<span class="listing-price">₦<?php  echo number_format($row["price"]).""; ?></span>  

							<span  style="float: right;"><?php echo $t_img ?> <i class="fa fa-image"></i></span>
							
							
						</div>

						<img src="images/listing-03.jpg" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="single-property-page-1.html"><?php echo $row["title"]; ?></a></h4>
							
								<i class="fa fa-map-marker"></i>
								<?php echo $row["address"]; ?>. <?php echo $row["lga"]; ?>, <?php echo $row["state"]; ?>
							

							<a href="single-property-page-1.html" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							
							<li><?php echo $row["rooms"]; ?> Bedroom</li>
							<li><?php echo $row["bathrooms"]; ?> Bathroms</li>
							
						</ul>

						<div class="listing-footer">
							<!-- <a href="#"><i class="fa fa-user"></i> Chester Miller</a> -->
							<span><i class="fa fa-eye"></i><?php echo $row["view"]; ?> views</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				     <?php
}
?>
				<!-- Listing Item / End -->



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

					<!-- Row -->
					<div class="row with-forms">
						<!-- Status -->
						<div class="col-md-12">
							<input type="text" value="<?php echo $p_location;?>" name="location" id="autocomplete" onFocus="geolocate()" placeholder="Where do you want to live?" />
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Type -->
						<div class="col-md-12">
						<select data-placeholder="Any Type" name="type" class="chosen-select-no-single" >
								<option value="flat">Flat</option>
								<option value="bungalow">Bungalow</option>
								<option value="shop">Shop</option>
								<option value="warehouse">Warehouse</option>
								<option value="bungalow">Bungalow</option>	
								</select>
													</div>
					</div>
					<!-- Row / End -->

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