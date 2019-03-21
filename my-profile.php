<?php 
include('core/session.php');
include('core/user_logic.php');
include('inc/user_header.php'); 
include('profile-pic.php'); 

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

				<form method="post">
				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

					<label>Your Name</label>
					<input name="name" value="<?php echo $row['name']; ?>"  type="text">

					<label>Your Title</label>
					<input name="occupation" value="<?php echo $row['occupation']; ?>" type="text">

					<label>Phone</label>
					<input name="phone" value="<?php echo $row['phone']; ?>" type="text">

					<label>Email</label>
					<input name="email" value="<?php echo $row['email']; ?>" type="text">


					<label>Location</label>
					<input id="autocomplete" value="<?php echo $row['location'] ?>" onFocus="geolocate()" placeholder="Your Location" class="form-control mb-sm-0" name="location">


					<h4 class="margin-top-50 margin-bottom-25">About Me</h4>
					<textarea name="about" id="about" cols="30" rows="10"><?php echo $row['about']; ?></textarea>
				


					<button name="profileupdate" type="submit" class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>
				</form>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<?php include('core/pro-pic.php'); ?>
						
  </div>
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <center><input type="file" id="file" class="upload" /></center>
							    <span id="uploaded_image"></span>
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
</div>

<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"my-profile.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
</script>



<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<?php include('inc/footer.php'); ?>