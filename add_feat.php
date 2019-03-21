<?php 
include('core/session.php');
include('core/user_logic.php');
include('inc/user_header.php'); 
$property_no=$_SESSION['property_no'];  
 ?>

<!-- CSS -->
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="dropzone.css" rel="stylesheet" type="text/css">

        <!-- Script -->
        <script src='jquery-3.2.1.min.js'></script>
        <script src="dropzone.js" type="text/javascript"></script>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i>Select Feature Picture</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<form method="post">
			<div class="row">

				
				<div class="agents-grid-container">

					<!-- Agent -->
					  <?php
                    $sql4 = "SELECT * FROM pro_img WHERE property_no='$property_no' ";
                    $query4 = mysqli_query($con, $sql4);

                              while($row4 =mysqli_fetch_array($query4)){
                                 
                             
                             echo '
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">
							<div class="agent-avatar">
							'.$row4['pic'].'
									 <center><p><b>Select Feature Picture</b></p>  
                          <input type="radio" required value="'.$row4['pic'].'" class="inline img-fluid" name="img"></center>
									<img src="uploads/'.$row4['pic'].'" heigth="100px" alt="">

									 <input name="property_no" type="hidden" value="'.$row4['property_no'].'">
							</div>
						</div>
					</div>
					';
                            }
                            ?>
					<!-- Agent / End -->

				
				</div>
				<!-- Agents Container / End -->
				<div class="divider"></div>
			<center><button type="submit" name="feat_pic" class="button preview margin-top-5">Continue<i class="fa fa-arrow-circle-right"></i></button></center>

			</div>
			</form>
		</div>


</div>
</div>
  
<?php include('inc/footer.php'); ?>