<?php 
include('core/session.php');
if($row['user_status']!=='')
{
header("Location: submit-property.php");
}
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
				<div class="col-md-8  my-profile">
					<?php echo $alert;  ?>
					<h4 class="margin-top-0 margin-bottom-30"></h4>

					<label> Enter Verication Code</label>
					<input type="number" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  name="sms_code" maxlength="6" required="" class="input-text" placeholder="Verication Code">

					

					<center><button name="comfirm-agent" type="submit" class="margin-top-20 button">Confirm number</button></center>
				</div>
				</form>

				

			</div>
		</div>

	</div>
</div>


<?php include('inc/footer.php'); ?>