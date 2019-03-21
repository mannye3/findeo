<?php 
include('core/select.php');
include('core/user_logic.php'); 
include('core/single_property.php'); 
include('inc/header.php'); 



?>



<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				
				<div class="property-title">
					<h2><?php echo $row_pro_d['title'] ?> <span class="property-badge">For Rent</span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							<?php echo $row_pro_d['address'] ?>, <?php echo $row_pro_d['lga'] ?>, <?php echo $row_pro_d['state'] ?>
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div class="property-price">₦<?php  echo number_format($row_pro_d["price"]).""; ?></div>
					
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
		
			<!-- Slider -->
			<div class="property-slider default">
				 <?php   while ($row9 = mysqli_fetch_array($query9)) {
                                             ?>
				<img src="uploads/<?php echo $row9["pic"]; ?>" class="item mfp-gallery"></a>
				 <?php
                }
                ?>
				
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				<?php   while ($row_pro_img2 = mysqli_fetch_array($query_pro_img2)) {
                                             ?>
				<div class="item"><img width="168" height="109" src="uploads/<?php echo $row_pro_img2["pic"]; ?>"  alt=""></div>
				<?php
                }
                ?>
				
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Bedrooms <span><?php echo $row_pro_d['rooms'] ?></span></li>
					<li>Bathrooms <span><?php echo $row_pro_d['bathrooms'] ?></span></li>
					<li>Property Type <span><?php  echo ucwords($row_pro_d["type"]) ?></span></li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						
					</p>

					<?php echo $row_pro_d['details'] ?>
					</p>

					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>

				<!-- Details -->
				
				

				
				<!-- Location -->
				<h3 class="desc-headline no-border" id="location">Location</h3>
				<div id="propertyMap-container">
					<div id="propertyMap" data-latitude="<?php echo $row_pro_d["latitude"] ?>" data-longitude="<?php echo $row_pro_d["longitude"] ?>"></div>
					<a href="#" id="streetView">Street View</a>


					</div>


				<!-- Similar Listings Container -->
				

			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">

				
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="images/user.jpg" alt="" /></div>
							<div class="agent-details">
								<h4><a href="#"><?php echo $row_pro_d["fullname"] ?></a></h4>
								<span><i class="sl sl-icon-call-in"></i>(123) 123-456</span>
							</div>
							<div class="clearfix"></div>
						</div>

						<input type="text" placeholder="Your Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
						<input type="text" placeholder="Your Phone">
						<textarea></textarea>
						<button class="button fullwidth margin-top-5">Send Message</button>
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->


				


				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-35">Featured Properties</h3>

					<div class="listing-carousel outer">
						<!-- Item -->


				 <?php
                while ($row_fea_pro = mysqli_fetch_array($query_fea_pro)) {
                    
                                             ?>

						<div class="item">
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
									
								</ul>
							</div>

							<img src="<?php echo $row_fea_pro["pic"]; ?>" alt="">
						</a>

					</div>
						</div>
						<!-- Item / End -->

						
				 <?php
                }
                ?>
					</div>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec"></script>
<script>
<?php include('inc/footer.php'); ?>