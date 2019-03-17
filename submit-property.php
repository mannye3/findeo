<?php 
include('core/session.php');
include('inc/user_header.php'); 
 ?>



<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Add Property</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">

		<div class="notification notice large margin-bottom-55">
			<h4>Don't Have an Account?</h4>
			<p>If you don't have an account you can create one by entering your email address in contact details section. A password will be automatically emailed to you.</p>
		</div>

		<!-- Section -->
		<h3>Basic Information</h3>
		<div class="submit-section">

			<!-- Title -->
			<div class="form">
				<h5>Property Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input class="search-field" type="text" value=""/>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Status -->
				<div class="col-md-6">
					<h5>Status</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>For Sale</option>
						<option>For Rent</option>
					</select>
				</div>

				<!-- Type -->
				<div class="col-md-6">
					<h5>Type</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>		
						<option>Apartment</option>
						<option>House</option>
						<option>Commercial</option>
						<option>Garage</option>
						<option>Lot</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Row -->
			<div class="row with-forms">

				<!-- Price -->
				<div class="col-md-4">
					<h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="USD">
					</div>
				</div>
				
				<!-- Area -->
				<div class="col-md-4">
					<h5>Area</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Sq Ft">
					</div>
				</div>

				<!-- Rooms -->			
				<div class="col-md-4">
					<h5>Rooms</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>More than 5</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Gallery</h3>
		<div class="submit-section">
			<form action="http://www.vasterad.com/file-upload" class="dropzone" ></form>
		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Location</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Address -->
				<div class="col-md-6">
					<h5>Address</h5>
					<input type="text">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>City</h5>
					<input type="text">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>State</h5>
					<input type="text">
				</div>

				<!-- Zip-Code -->
				<div class="col-md-6">
					<h5>Zip-Code</h5>
					<input type="text">
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Detailed Information</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Description</h5>
				<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Age of Home -->
				<div class="col-md-4">
					<h5>Building Age <span>(optional)</span></h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>0 - 1 Years</option>
						<option>0 - 5 Years</option>
						<option>0 - 10 Years</option>
						<option>0 - 20 Years</option>
						<option>0 - 50 Years</option>
						<option>50 + Years</option>
					</select>
				</div>

				<!-- Beds -->
				<div class="col-md-4">
					<h5>Bedrooms <span>(optional)</span></h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>

				<!-- Baths -->
				<div class="col-md-4">
					<h5>Bathrooms <span>(optional)</span></h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Checkboxes -->
			<h5 class="margin-top-30">Other Features <span>(optional)</span></h5>
			<div class="checkboxes in-row margin-bottom-20">
		
				<input id="check-2" type="checkbox" name="check">
				<label for="check-2">Air Conditioning</label>

				<input id="check-3" type="checkbox" name="check">
				<label for="check-3">Swimming Pool</label>

				<input id="check-4" type="checkbox" name="check" >
				<label for="check-4">Central Heating</label>

				<input id="check-5" type="checkbox" name="check">
				<label for="check-5">Laundry Room</label>	


				<input id="check-6" type="checkbox" name="check">
				<label for="check-6">Gym</label>

				<input id="check-7" type="checkbox" name="check">
				<label for="check-7">Alarm</label>

				<input id="check-8" type="checkbox" name="check">
				<label for="check-8">Window Covering</label>
		
			</div>
			<!-- Checkboxes / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Contact Details</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Name -->
				<div class="col-md-4">
					<h5>Name</h5>
					<input type="text">
				</div>

				<!-- Email -->
				<div class="col-md-4">
					<h5>E-Mail</h5>
					<input type="text">
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Phone <span>(optional)</span></h5>
					<input type="text">
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<div class="divider"></div>
		<a href="#" class="button preview margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

		</div>
	</div>

</div>
</div>
<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Property</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Agents</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="90fff6f6f9f3f5d0f5e8f1fde0fcf5bef3fffd">[email&#160;protected]</span></a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/rangeSlider.js"></script>
<script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/masonry.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="scripts/dropzone.js"></script>
<script>
	$(".dropzone").dropzone({
		dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Click here or drop files to upload",
	});
</script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="pink" title="Pink"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</div>
<!-- Wrapper / End -->


</body>

<!-- Mirrored from www.vasterad.com/themes/findeo/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Dec 2018 11:44:46 GMT -->
</html>