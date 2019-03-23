<?php 
include('core/session.php');
include('core/user_select.php');
include('inc/user_header.php'); 
 ?>



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>My Properties</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Properties</li>
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


		<!-- Widget -->
		<?php include('inc/nav.php'); ?>

		<div class="col-md-8">
			<table class="manage-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Upload Date & Time</th>
					<th></th>
				</tr>
 						<?php
                          while ($rw5 = mysqli_fetch_array($q_u_pro)) {
                             ?>
				<!-- Item #1 -->
				<tr>
					<td class="title-container">
						<img src="uploads/<?php echo $rw5["pic"]; ?>" alt="">
						<div class="title">
							<h4><a href="property.php?pro=<?php echo $rw5["property_no"]; ?>"><?php echo $rw5["title"]; ?></a></h4>
							<span><?php echo $rw5["address"]; ?>, <?php  echo ucwords($rw5["lga"]) ?>, <?php echo $rw5["state"]; ?> </span>
							<span class="table-property-price">₦<?php  echo number_format($rw5["price"]).""; ?></span> 

							<?php   
							if ($rw5['status'] == 1){
                                echo '<span class="table-property-price " style="background: lightgreen;"><span style="color: white">Active</span></span>';
                                            }
                                            ?>

                                            <?php

                                                if ($rw5['status'] == 0){
                                                echo '<span class="table-property-price " style="background: red;"><span style="color: white">Under Review</span></span>';
                                            }
                                            ?>




							
						</div>
					</td>
					<td class="expire-date"><?php echo $rw5["upload_date"]; ?></td>
					<td class="action">
						<a href="edit-property.php?id=<?php echo $rw5["id"]; ?>"><i class="fa fa-pencil"></i> Edit</a>
						<a href="edit-pictures.php?pro=<?php echo $rw5["property_no"]; ?>"><i class="fa fa-image"></i> Edit Pictures</a>
						<a href="core/delete_pro.php?del_pro=<?php echo $rw5["property_no"]; ?>" class="delete"  onclick="return confirm('Are you sure you want to DELETE PROPERTY ?')"  data-type="confirm" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

			<?php } ?>


			</table>
			<a href="submit-property.php" class="margin-top-40 button">Submit New Property</a>
		</div>

	</div>
</div>

<?php include('inc/footer.php'); ?>