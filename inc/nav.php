<div class="col-md-4">
			<div class="sidebar left">

 <?php
   if($row['type']=='User'){

?>
				<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
						<li><a href="my-profile.php" class="current"><i class="sl sl-icon-user"></i> My Profile</a></li>
						<li><a href="change-password.php"><i class="sl sl-icon-lock"></i> Change Password</a></li>
						<li><a href="core/logout.php"><i class="sl sl-icon-power"></i> Log Out</a></li>
						
					</ul>
					
					

				</div>
			<?php } ?>

<?php
   if($row['type']=='Agent'){

?>
<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
						<li><a href="my-profile.php" class="current"><i class="sl sl-icon-user"></i> My Profile</a></li>
						
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="my-properties.php"><i class="sl sl-icon-docs"></i> My Properties</a></li>
						<li><a href="submit-property.php"><i class="sl sl-icon-action-redo"></i> Submit New Property</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="change-password.php"><i class="sl sl-icon-lock"></i> Change Password</a></li>
						<li><a href="core/logout.php"><i class="sl sl-icon-power"></i> Log Out</a></li>
					</ul>

				</div>
			<?php } ?>

			</div>
		</div>