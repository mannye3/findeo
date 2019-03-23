<?php 
include('core/select.php');
include('inc/header.php'); ?>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Agents</h2>
				<span>List of Our Agents</span>
				
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
			<div class="row">

				<!-- Agents Container -->
				<div class="agents-grid-container">
<?php
                while ($row_agent = mysqli_fetch_array($q_user)) {

                                             ?>
					<!-- Agent -->
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="agent.php?agent=<?php echo $row_agent["user_code"]; ?>">
									<?php include('core/pro-pic_agent.php') ?>
									<span class="view-profile-btn">View Profile</span>
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<h4><a href="agent.php"><?php echo $row_agent["name"]; ?></a></h4>
									<!-- <span>Agent In New York</span> -->
								</div>

								<!-- <ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i><?php echo $row_agent["phone"]; ?></li><br>
									<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__" data-cfemail="3c4853517c59445d514c5059125f5351"><?php echo $row_agent["email"]; ?></span></a></li>
								</ul> -->

								<!-- <ul class="social-icons">
									<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
								</ul> -->
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- Agent / End -->

					<?php
                }
                ?>


				</div>
				<!-- Agents Container / End -->
				<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<?php  
                        $sql = "SELECT COUNT(id) FROM users";  
                        $rs_result = mysqli_query($con, $sql);  
                        $row = mysqli_fetch_row($rs_result);  
                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit);  
                        $pagLink = '<div class="pagination-box hidden-mb-45 text-center">
                                 <nav aria-label="Page navigation example">
                        <ul class="pagination">';  
                        for ($i=1; $i<=$total_pages; $i++) {  
                                     $pagLink .= "<li class=''><a class='current-page' href='agents.php?page=".$i."'>".$i."</a></li>";  
                        };  
                        echo $pagLink . " </ul>
                        </div>";  
                        ?>
					
			</div>
			<!-- Pagination / End -->

			</div>
		</div>


	</div>
</div>


<?php include('inc/footer.php'); ?>