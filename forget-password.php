<?php include('core/logic.php');
include('inc/header.php');

if(isset($user_check))
{
echo "<script language='javascript' type='text/javascript'>

      window.location.href='my-profile.php';

       </script>";
}
  
                        ?>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Forget Password</h2>
				
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
			 <?php echo $alert ?>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="post" class="login">

					<p class="form-row form-row-wide">
						<label for="username">Enter Your Email:
							<i class="im im-icon-Mail"></i>
							<input type="email" class="input-text" name="email"  value="" />
						</label>
					</p>

					

					<p class="form-row">
						<input type="submit" name="pass-reset" class="button border margin-top-10" name="login" value="Submit" />

						
					</p>

					<p class="lost_password">
						You remember your password? <a href="login-register.php">Login</a>
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