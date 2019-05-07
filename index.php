<?php
$menu="home";
include('core/select.php'); 


ini_set('display_errors', 1);
  error_reporting(~0);

  $p_location = null;
include('inc/header.php'); 

?>

<style type="text/css">
	.find {
          color: white;
            }
</style>
<!-- Banner
================================================== -->
<div class="parallax" data-background="images/place.jpg" data-color="#36383e" data-color-opacity="0.5" data-img-width="2500" data-img-height="1600">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="search-container">

					<!-- Form -->
					<h1 class="find">Find your next home</h1>
					<p class="find">Search properties for rent in Nigeria</p>

					<!-- Row With Forms -->
						<form method="get" action="search.php">
					<div class="row with-forms">

						<!-- Property Type -->
						
						<!-- Status -->
						<!-- <div class="col-md-6">
							
								<select data-placeholder="Select property type" name="type" class="chosen-select-no-single" >
									<option></option>
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

						<!-- Main Search Input -->
						<div class="col-md-12">
							<div class="main-search-input">
								<input type="text" value="<?php echo $p_location;?>" name="location" id="autocomplete" onFocus="geolocate()" placeholder="Where do you want to live?" />
								<button class="button"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</form>
					<!-- Row With Forms / End -->


				</div>

			</div>
		</div>
	</div>

</div>


<!-- Content
================================================== -->
<!-- Fullwidth Section -->
<section class="fullwidth border-bottom margin-top-0 margin-bottom-0 padding-top-50 padding-bottom-50" data-background-color="#ffffff">

	<!-- Content -->
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="fa fa-list"></i>
					</div>

					<h3>Free Listing</h3>
					<p>Easy listing process</p>
				</div>
			</div>

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="fa fa-search"></i>
					</div>

					<h3>Safe Search</h3>
					<p>Search for your prefered properties</p>
				</div>
			</div>

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="fa fa-users"></i>
					</div>

					<h3>Connect</h3>
					<p>Connect with Agents/Landlords</p>
				</div>
			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->


<!-- Featured -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline margin-bottom-25 margin-top-65">Featured Properties</h3>
		</div>

		<!-- Carousel -->
		<div class="col-md-12">
			<div class="carousel">

				 <?php
                while ($row_fea_pro = mysqli_fetch_array($query_fea_pro)) {
                     
                                             ?>

				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="property.php?pro=<?php echo $row_fea_pro["property_no"]; ?>" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">For <?php  echo ucwords($row_fea_pro["purpose"]) ?></span>
								
							</div>

							<div class="listing-badges2">
							<span class="featured"><img style="width: 170px;" src="images/watermark.png" ></span>
							
						</div>

							<div class="listing-img-content">
								<span class="listing-compact-title"><?php echo $row_fea_pro["title"]; ?> <i>₦<?php  echo number_format($row_fea_pro["price"]).""; ?></i></span>
								
								<ul class="listing-hidden-content">
									
									<li>Bedroom <span><?php echo $row_fea_pro["rooms"]; ?></span></li>
									<li>Bathroom <span><?php echo $row_fea_pro["bathrooms"]; ?></span></li>
									<li>Type <span><?php echo $row_fea_pro["type"]; ?></span></li>
									
								</ul>
							</div>

							<img width="333" height="222" src="uploads/<?php echo $row_fea_pro["pic"]; ?>" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

				 <?php
                }
                ?>

				

			</div>
		</div>
		<!-- Carousel / End -->

	</div>
</div>
<!-- Featured / End -->












<section class="fullwidth border-top margin-top-55 margin-bottom-0 padding-top-60 padding-bottom-65" data-background-color="#ffffff">
	<!-- Logo Carousel -->
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-40 margin-top-10">Our Partners</h3>
			</div>
			
			<!-- Carousel -->
			<div class="col-md-12 text-center">
				<div class="logo-carousel dot-navigation">
					
					<!-- <div class="item">
						<img src="images/brand/1.png" alt="">
					</div> -->
					
					<div class="item">
						<img src="images/brand/2.jpg" alt="">
					</div>
					
					<div class="item">
						<img src="images/brand/3.png" alt="">
					</div>
					
					<div class="item">
						<img src="images/brand/4.jpg" alt="">
					</div>
					
					


				</div>
			</div>
			<!-- Carousel / End -->

		</div>
	</div>
	<!-- Logo Carousel / End -->
</section>


<!-- Flip banner -->
<a href="rent.php" class="flip-banner parallax" data-background="images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
	<div class="flip-banner-content">
		<h2 class="flip-visible">We help people and homes find each other</h2>
		<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->


<?php include('inc/home_footer.php');  ?>
