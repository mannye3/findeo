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

				<h2>Login Or Register</h2>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Login Or Register</li>
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

	<!-- <button class="button social-login via-twitter"><i class="fa fa-twitter"></i> Log In With Twitter</button>
	<button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Log In With Google Plus</button>
	<button class="button social-login via-facebook"><i class="fa fa-facebook"></i> Log In With Facebook</button> -->

	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav">
			 <?php echo $alert; ?>
			<li class=""><a href="#tab1">Log In</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="post" class="login">

					<p class="form-row form-row-wide">
						<label for="username">Email:
							<i class="im im-icon-Mail"></i>
							<input type="email" class="input-text" name="email"  value="" />
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:
							<i class="im im-icon-Lock-2"></i>
							<input class="input-text" name="password" type="password"/>
						</label>
					</p>

					
					<p class="form-row">
						<input type="submit" name="login" class="button border margin-top-10" name="login" value="Login"/>
						
						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p>

					<p class="lost_password">
						<a href="forget-password.php" >Lost Your Password?</a>
					</p>
					
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form method="post" class="register">
					
				<p class="form-row form-row-wide">
					<label for="username2">Full Name:
						<i class="im im-icon-Male"></i>
						<input required="" type="text" class="input-text" name="name" id="username2" value="" />
					</label>
				</p>
					
				<p class="form-row form-row-wide">
					<label for="email2">Email Address:
						<i class="im im-icon-Mail"></i>
						<input required="" type="text" class="input-text" name="email"  value="" />
					</label>
				</p>


				<p class="form-row form-row-wide">
					<label for="email2">Phone Number:
						<i class="im im-icon-Phone"></i>
						<input required="" type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  name="phone" required=""class="input-text" />
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password1">Password:
						<i class="im im-icon-Lock-2"></i>
						<input class="input-text" required="" minlength="6" id="password" type="password" name="password" />
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password2">Repeat Password:
						<i class="im im-icon-Lock-2"></i>
						<input class="input-text" type="password" id="confirm_password" name="confirm_Password"/>
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password2">You are?
					
						<select name="type" required=""  >
						<option label="blank"></option>	
						<option value="Agent">Agent</option>
						<option value="User">User</option>
						
					</select>
					</label>
				</p>

				<p class="form-row">
					<input type="submit" name="register"  class="button border fw margin-top-10" name="register" value="Register" />
				</p>

				</form>
			</div>

			<div class="tab-content" id="tab3" style="display: none;">

				<form method="post" class="register">
					
				
					
				<p class="form-row form-row-wide">
					<label for="email2">Email Address:
						<i class="im im-icon-Mail"></i>
						<input required="" type="text" class="input-text" name="email"  value="" />
					</label>
				</p>


			
			

				<p class="form-row">
					<input type="submit" name="register"  class="button border fw margin-top-10" name="register" value="Register" />
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