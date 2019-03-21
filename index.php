<?php
$menu="home";
include('core/select.php'); 


ini_set('display_errors', 1);
  error_reporting(~0);

  $p_location = null;
include('inc/header.php'); 

?>


<!-- Banner
================================================== -->
<div class="parallax" data-background="images/place.jpg" data-color="#36383e" data-color-opacity="0.5" data-img-width="2500" data-img-height="1600">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="search-container">

					<!-- Form -->
					<h2>Find your next home</h2>
					
					<!-- Row With Forms -->
					<form method="get" action="search.php">
					<div class="row with-forms">

						<!-- Property Type -->
						<div class="col-md-6">
							<div class="main-search-input">
								<input type="text" value="<?php echo $p_location;?>" name="location" id="autocomplete" onFocus="geolocate()" placeholder="Where do you want to live?" />
								<!-- <button class="button"><i class="fa fa-search"></i></button> -->
							</div>
							
						</div>

						<!-- Status -->
						

						<!-- Main Search Input -->
						<div class="col-md-6">
							<div class="main-search-input">
								<select data-placeholder="Any Type" name="type" class="chosen-select-no-single" >
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
								<button class="button" type="submit" name="search"><i class="fa fa-search"></i></button>
							</div>
						</div>

					</div>
					</form>
					
				

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
						<i class="im im-icon-Checked-User"></i>
					</div>

					<h3>Agent Finder</h3>
					<p>See who specializes in your area, has the most reviews and the right experience to meet your needs.</p>
				</div>
			</div>

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="im im-icon-Cloud-Computer"></i>
					</div>

					<h3>Modern Technology</h3>
					<p>More than 10,000 customers buy or sell a home with us each year. We help people and homes find each together.</p>
				</div>
			</div>

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="im im-icon-Idea"></i>
					</div>

					<h3>Home Designs Ideas</h3>
					<p>Our specialists can help you get started on that home project. Find paint colors, that perfect tile and more. </p>
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
			<h3 class="headline margin-bottom-25 margin-top-65">Featured</h3>
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
								<span class="featured"><?php  echo ucwords($row_fea_pro["type"]) ?></span>
								
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title"><?php echo $row_fea_pro["title"]; ?> <i>₦<?php  echo number_format($row_fea_pro["price"]).""; ?></i></span>
								
								<ul class="listing-hidden-content">
									
									<li>Bedroom <span><?php echo $row_fea_pro["rooms"]; ?></span></li>
									<li>Bathroom <span><?php echo $row_fea_pro["bathrooms"]; ?></span></li>
									<li>Baths <span>1</span></li>
								</ul>
							</div>

							<img src="<?php echo $row_fea_pro["pic"]; ?>" alt="">
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
				<h3 class="headline centered margin-bottom-40 margin-top-10">Companies We've Worked With <span>We can assist you with your innovation or commercialisation journey!</span></h3>
			</div>
			
			<!-- Carousel -->
			<div class="col-md-12">
				<div class="logo-carousel dot-navigation">
					
					<div class="item">
						<img src="images/logo-01.png" alt="">
					</div>
					
					<div class="item">
						<img src="images/logo-02.png" alt="">
					</div>
					
					<div class="item">
						<img src="images/logo-03.png" alt="">
					</div>
					
					<div class="item">
						<img src="images/logo-04.png" alt="">
					</div>
					
					<div class="item">
						<img src="images/logo-05.png" alt="">
					</div>		

					<div class="item">
						<img src="images/logo-06.png" alt="">
					</div>	

					<div class="item">
						<img src="images/logo-07.png" alt="">
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


<?php include('inc/footer.php');  ?>
