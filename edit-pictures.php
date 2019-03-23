<?php 
include('core/session.php');
include('core/user_logic.php');
include('inc/user_header.php'); 
$property_no = $_GET['pro'];  
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
                                 ?>
                             
                            
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">
							<div class="agent-avatar">
							
									 <center><p><b>Select Feature Picture</b></p>  
                          <input type="radio"  value="<?php echo $row4['pic']; ?>" class="inline img-fluid" name="img"></center>
									
                          <img style="width: 333px; height: 222px;" src="uploads/<?php echo $row4['pic']; ?>" >
                          <center><a href="core/delete_edit_pic.php?pro=<?php echo $_GET['pro'] ?>&id=<?php echo $row4['id'] ?>" onclick="return confirm('Are you sure you want to DELETE PICTURE ?')"  data-type="confirm"><h4>Delete Picture</h4></a></center>
									 <input name="property_no" type="hidden" value="'.$row4['property_no'].'">
							</div>
						</div>
					</div>
					<?php
                            }
                            ?>
					<!-- Agent / End -->

				
				</div>
				<!-- Agents Container / End -->
							<div class="divider"></div>
							<center><button type="submit" name="feat_pic" class="button preview margin-top-5">Subnit<i class="fa fa-arrow-circle-right"></i></button></center>

						<center> <form method="post" action="add_pictures.php">
                                                           <input type="hidden" value="<?php echo $property_no ?>" name="property_no"><button type="submit" name="add_more_pic" class="button preview margin-top-5">Add More Pictures <i  class="fa fa-plus-circle"></i></button></form></center>
			</div>
			</form>
		</div>


</div>
</div>
  
<?php include('inc/footer.php'); ?>