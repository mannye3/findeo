<?php 
include('core/session.php');
include('core/user_logic.php');
include('inc/user_header.php'); 
 ?>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Change Password</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Change Password</li>
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
				<form method="post">
				<div class="col-md-6  my-profile">
					<?php echo $alert;  ?>
					<h4 class="margin-top-0 margin-bottom-30">Change Password</h4>

					<label>Current Password</label>
					<input name="password" required="" type="password">

					<label>New Password</label>
					<input minlength="8" required="" id="password" name="newpassword" type="password">

					<label>Confirm New Password</label>
					<input id="confirm_password" name="confirm_Password" type="password">

					<button name="change-pass"  type="submit" class="margin-top-20 button">Save Changes</button>
				</div>
				</form>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Your password should be at least 8 random characters long to be safe</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<?php include('inc/footer.php'); ?>