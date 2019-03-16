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
					<h2>Find New Home</h2>

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
								<option value="flat">Flat</option>
								<option value="bungalow">Bungalow</option>
								<option value="shop">Shop</option>
								<option value="warehouse">Warehouse</option>
								<option value="bungalow">Bungalow</option>
								
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

				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="single-property-page-1.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span>For Sale</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title">Eagle Apartments <i>$275,000</i></span>

								<ul class="listing-hidden-content">
									<li>Area <span>530 sq ft</span></li>
									<li>Rooms <span>3</span></li>
									<li>Beds <span>1</span></li>
									<li>Baths <span>1</span></li>
								</ul>
							</div>

							<img src="images/listing-01.jpg" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="single-property-page-2.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span>For Sale</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title">Serene Uptown <i>$900 / monthly</i></span>

								<ul class="listing-hidden-content">
									<li>Area <span>440 sq ft</span></li>
									<li>Rooms <span>3</span></li>
									<li>Beds <span>1</span></li>
									<li>Baths <span>1</span></li>
								</ul>
							</div>

							<img src="images/listing-02.jpg" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="single-property-page-1.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span>For Rent</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title">Meridian Villas <i>$1700 / monthly</i></span>

								<ul class="listing-hidden-content">
									<li>Area <span>1450 sq ft</span></li>
									<li>Rooms <span>3</span></li>
									<li>Beds <span>2</span></li>
									<li>Baths <span>2</span></li>
								</ul>
							</div>

							<img src="images/listing-03.jpg" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="single-property-page-3.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span>For Sale</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title">Selway Apartments <i>$420,000</i></span>

								<ul class="listing-hidden-content">
									<li>Area <span>540 sq ft</span></li>
									<li>Rooms <span>2</span></li>
									<li>Beds <span>2</span></li>
									<li>Baths <span>1</span></li>
								</ul>
							</div>

							<img src="images/listing-04.jpg" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="single-property-page-2.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span>For Sale</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title">Oak Tree Villas <i>$535,000</i></span>

								<ul class="listing-hidden-content">
									<li>Area <span>550 sq ft</span></li>
									<li>Rooms <span>3</span></li>
									<li>Beds <span>2</span></li>
									<li>Baths <span>2</span></li>
								</ul>
							</div>

							<img src="images/listing-05.jpg" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="single-property-page-1.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span>For Rent</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title">Old Town Manchester <i>$500 / monthly</i></span>

								<ul class="listing-hidden-content">
									<li>Area <span>850 sq ft</span></li>
									<li>Rooms <span>3</span></li>
									<li>Beds <span>2</span></li>
									<li>Baths <span>1</span></li>
								</ul>
							</div>

							<img src="images/listing-06.jpg" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

			</div>
		</div>
		<!-- Carousel / End -->

	</div>
</div>
<!-- Featured / End -->










<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-35 margin-top-10">Most Popular Places <span>Properties In Most Popular Places</span></h3>
		</div>

		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-01.jpg">

				<!-- Badge -->
				<div class="listing-badges">
					<span class="featured">Featured</span>
				</div>

				<div class="img-box-content visible">
					<h4>New York </h4>
					<span>14 Properties</span>
				</div>
			</a>

		</div>

		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-02.jpg">
				<div class="img-box-content visible">
					<h4>Los Angeles</h4>
					<span>24 Properties</span>
				</div>
			</a>

		</div>

		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-03.jpg">
				<div class="img-box-content visible">
					<h4>San Francisco </h4>
					<span>12 Properties</span>
				</div>
			</a>

		</div>

		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-04.jpg">
				<div class="img-box-content visible">
					<h4>Miami</h4>
					<span>9 Properties</span>
				</div>
			</a>

		</div>

	</div>
</div>
<!-- Container / End -->


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
<a href="listings-half-map-grid-standard.html" class="flip-banner parallax" data-background="images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
	<div class="flip-banner-content">
		<h2 class="flip-visible">We help people and homes find each other</h2>
		<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->


<?php include('inc/footer.php');  ?>
