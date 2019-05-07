<?php include('core/logic.php');
include('inc/header.php');
$user_id = $_GET['uc'];
$sql = "SELECT * FROM users WHERE user_code='$user_id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);

      $user_code = $row['user_code'];
 ?>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Reset Password</h2>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>Log In & Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">

	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav">
			 <?php echo $alert; ?>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="post" class="login">

					<p class="form-row form-row-wide">
						<label for="username">Enter your new password:
							<i class="im im-icon-Lock-2"></i>
							<input minlength="8" id="password"   type="password" class="input-text" name="password"   />
						</label>
					</p>
			<input class="form-control" type="hidden" name="user_code" 
			value="<?php echo $user_code; ?>"  >

					<p class="form-row form-row-wide">
						<label for="username">Confirm password:
							<i class="im im-icon-Lock-2"></i>
							<input id="confirm_password" type="password" class="input-text" name="confirm_password" />
						</label>
					</p>

					

					<p class="form-row">
						<input type="submit" name="reset" class="button border margin-top-10" name="login" value="Submit" />

						
					</p>

					
				</form>
			</div>

			
		</div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->


<?php include('inc/footer.php'); ?>