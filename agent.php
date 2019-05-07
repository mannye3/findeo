<?php 
include('core/select.php');
include('inc/header.php');
include('core/agent.php');

?>



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2><?php echo $row_agent["name"]; ?></h2>
				<span><?php echo $row_agent["location"]; ?></span>
				
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


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<div class="agent agent-page">

				<div class="agent-avatar">
					<?php include('core/pro-pic_agent.php'); ?>
				</div>

				<div class="agent-content">
					<div class="agent-name">
						<h4><?php echo $row_agent["name"]; ?></h4>
						<span><?php echo $row_agent["location"]; ?></span>
					</div>

					<p><?php echo $row_agent["about"]; ?></p>

					<ul class="agent-contact-details">
						<li><i class="sl sl-icon-call-in"></i><?php echo $row_agent["phone"]; ?></li>
						<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__"><?php echo $row_agent["email"]; ?></span></a></li>
					</ul>

					
					<div class="clearfix"></div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-lg-8 col-md-8">

			<h4 class="headline">Agent Properties</h4>

			
			
			<div class="listings-container list-layout">
				<?php
                while ($row_ag_pro = mysqli_fetch_array($query_ag_pro)) {

                       $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row_ag_pro["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
                                             ?>
				<!-- Listing Item -->
				<div class="listing-item">

					<a href="property.php?pro=<?php echo $row_ag_pro["property_no"]; ?>" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">For <?php  echo ucwords($row_ag_pro["purpose"]) ?></span>
							
						</div>

						<div class="listing-img-content">
							<span class="listing-price">₦<?php  echo number_format($row_ag_pro["price"]) ?></span>
							<span  style="float: right;"><?php echo $t_img ?> <i class="fa fa-image"></i></span>
						</div>

						<img src="uploads/<?php echo $row_ag_pro["pic"]; ?>" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="property.php?pro=<?php echo $row_ag_pro["property_no"]; ?>"><?php echo $row_ag_pro["title"]; ?></a></h4>
							
								<i class="fa fa-map-marker"></i>
								<?php echo $row_ag_pro["address"]; ?>. <?php echo $row_ag_pro["lga"]; ?>, <?php echo $row_ag_pro["state"]; ?>
							</a>

							<a href="property.php?pro=<?php echo $row_ag_pro["property_no"]; ?>" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							
							<li><?php echo $row_ag_pro["rooms"]; ?> Bedroom</li>
							<li><?php echo $row_ag_pro["bathrooms"]; ?> Bathroms</li>
							<li>Type: <?php echo $row_ag_pro["type"]; ?> </li>
							
						</ul>

						<div class="listing-footer">
							<!-- <a href="#"><i class="fa fa-user"></i> Chester Miller</a> -->
							<span><i class="fa fa-eye"></i><?php echo $row_ag_pro["view"]; ?> views</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->
				 <?php
                }
                ?>

			</div>
			<!-- Listings Container / End -->

			
		

		</div>


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-4">
			<div class="sidebar sticky right">

			
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
								<span class="featured">For <?php  echo ucwords($row_fea_pro["puropse"]) ?></span>
								
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



<?php include('inc/footer.php'); ?>