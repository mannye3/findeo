<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
<title>Real Estate and Property in Nigeria for Rent - Prifa.com.ng</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="description" content="Prifa.com.ng is Nigerian real estate and property listing website with property and houses in Nigeria for rent and for sale. We are the online real estate destination for property sales and rentals in Nigeria with properties including homes, houses, land, shops, offices and other commercial properties to buy or rent." />
<meta property="og:type" content="website" />
<meta name="google-site-verification" content="Q84fHqoLB0pIVJ-foOCC0tS31YH5Kh_tHHp6Xc_UgqU" />

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="css/dropzone.css" rel="stylesheet" type="text/css">
<link href="images/icon.jpg" type="img/x-icon" rel="shortcut icon">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">





<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Topbar -->
	<div id="top-bar">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Top bar -->
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i>+2349073627352 </li>
					<li><i class="fa fa-envelope"></i> <a href="#"><span class="__cf_email__">info@prifa.com.ng</span></a></li>
					
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="instagram" target="blank_" href="https://www.instagram.com/prifa_ng"><i class="icon-instagram"></i></a></li>
					
				</ul>
			</div>
			<!-- Left Side Content / End -->

		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Topbar / End -->


	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>


				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a href="index.php">Home</a>
							
						</li>

						<li><a href="rent.php">For Rent</a>
							
						</li>

						<li><a href="sale.php">For Sale</a>
							
						</li>


						<li><a href="agents.php">Agents</a>
							
						</li>

						

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->


			<div class="right-side">
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><?php include('core/pro-pic_header.php'); ?></span>Hi, <?php echo $row['name']; ?></div>

						<?php
   if($row['type']=='Agent'){

?>
						<ul>
							<li><a href="my-profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>
							
							<li><a href="my-properties.php"><i class="sl sl-icon-docs"></i> My Properties</a></li>
							<li><a href="core/logout.php"><i class="sl sl-icon-power"></i> Log Out</a></li>
						</ul>
						

					</div>

					<a href="submit-property.php" class="button border">Submit Property</a>
				</div>
				<?php } ?>


				<?php
   if($row['type']=='User'){

?>
						<ul>
							<li><a href="my-profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>
							
							<li><a href="core/logout.php"><i class="sl sl-icon-power"></i> Log Out</a></li>
						</ul>
						

					</div>

				</div>
				<?php } ?>
                       






			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


