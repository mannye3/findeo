<?php include('core/select.php');
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

		<div class="col-md-9">

		
			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				 <?php
                while ($row5_rent = mysqli_fetch_array($query5)) {

                    $sql_pro_img = "SELECT SUM(num) AS t_img FROM pro_img WHERE property_no=".$row5_rent["property_no"]." ";
                    $query14 =mysqli_query($con, $sql_pro_img);
                    $rw14 =mysqli_fetch_array($query14);
                        $t_img = $rw14['t_img'];
                                             ?>
				<div class="listing-item">

					<a href="single-property-page-1.html" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured"><?php  echo ucwords($row5_rent["type"]) ?></span>
							
						</div>

						<div class="listing-img-content">
							<span class="listing-price">₦<?php  echo number_format($row5_rent["price"]) ?></span>
							<span  style="float: right;"><?php echo $t_img ?> <i class="fa fa-image"></i></span>
						</div>

						<img src="images/listing-03.jpg" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="single-property-page-1.html"><?php echo $row5_rent["title"]; ?></a></h4>
							
								<i class="fa fa-map-marker"></i>
								<?php echo $row5_rent["address"]; ?>. <?php echo $row5_rent["lga"]; ?>, <?php echo $row5_rent["state"]; ?>
							</a>

							<a href="single-property-page-1.html" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							
							<li><?php echo $row5_rent["rooms"]; ?> Bedroom</li>
							<li><?php echo $row5_rent["bathrooms"]; ?> Bathroms</li>
							
						</ul>

						<div class="listing-footer">
							<!-- <a href="#"><i class="fa fa-user"></i> Chester Miller</a> -->
							<span><i class="fa fa-eye"></i><?php echo $row5_rent["view"]; ?> views</span>
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
				<nav class="pagination">
					<?php  
                        $sql = "SELECT COUNT(id) FROM property WHERE  status=1";  
                        $rs_result = mysqli_query($con, $sql);  
                        $row = mysqli_fetch_row($rs_result);  
                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit);  
                        $pagLink = '<div class="pagination-box hidden-mb-45 text-center">
                                 <nav aria-label="Page navigation example">
                        <ul class="pagination">';  
                        for ($i=1; $i<=$total_pages; $i++) {  
                                     $pagLink .= "<li class=''><a class='current-page' href='rent.php?page=".$i."'>".$i."</a></li>";  
                        };  
                        echo $pagLink . " </ul>
                        </div>";  
                        ?>
					
			</div>
			<!-- Pagination / End -->

		</div>


	</div>
</div>


<?php include('inc/footer.php'); ?>