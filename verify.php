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

				<h2>Verify phone number</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Verify phone number</li>
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
				<div class="col-md-8  my-profile">
					<?php echo $ermsg2;  ?>
					<h4 class="margin-top-0 margin-bottom-30">Verify your phone number</h4>

					<label>Confirm your phone number</label>
					<input required="" value="<?php echo $row['phone'] ?>" class="input-text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  name="phone" required="" >

					

					<center><button name="upt-phone-sms" type="submit" class="margin-top-20 button">Get Verification Code</button></center>
				</div>
				</form>

				

			</div>
		</div>

	</div>
</div>


<?php include('inc/footer.php'); ?>