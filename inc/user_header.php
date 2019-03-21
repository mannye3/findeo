<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
<title>Findeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>

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
					<li><i class="fa fa-phone"></i> (123) 123-456 </li>
					<li><i class="fa fa-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="c9a6afafa0aaac89acb1a8a4b9a5ace7aaa6a4">[email&#160;protected]</span></a></li>
					
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
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
					<a href="index.html"><img src="images/logo.png" alt=""></a>
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

						<li><a href="rent.php">Rent</a>
							
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
						<ul>
							<li><a href="my-profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>
							
							<li><a href="my-properties.php"><i class="sl sl-icon-docs"></i> My Properties</a></li>
							<li><a href="core/logout.php"><i class="sl sl-icon-power"></i> Log Out</a></li>
						</ul>
					</div>

					<a href="submit-property.php" class="button border">Submit Property</a>
				</div>
                       






			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


