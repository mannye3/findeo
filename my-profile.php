<?php 
include('core/session.php');
include('inc/user_header.php'); 
 ?>



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>My Profile</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Profile</li>
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
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

					<label>Your Name</label>
					<input value="<?php echo $row['name']; ?>" type="text">

					<label>Your Title</label>
					<input value="<?php echo $row['occupation']; ?>" type="text">

					<label>Phone</label>
					<input value="<?php echo $row['phone']; ?>" type="text">

					<label>Email</label>
					<input value="<?php echo $row['email']; ?>" type="text">


					<h4 class="margin-top-50 margin-bottom-25">About Me</h4>
					<textarea name="about" id="about" cols="30" rows="10"><?php echo $row['about']; ?></textarea>
				


					<button class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="images/agent-02.jpg" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<?php include('inc/footer.php'); ?>