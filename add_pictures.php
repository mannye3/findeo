<?php 
include('core/session.php');
include('inc/user_header.php'); 

$property_no=$_SESSION['property_no'];     
$sql_pro = "SELECT * FROM property WHERE property_no='$property_no' ";
$query_pro  = mysqli_query($con, $sql_pro);
$row_pro = mysqli_fetch_array($query_pro);
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
				<h2><i class="fa fa-plus-circle"></i> Add Property Pictures</h2>
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
		<div class="submit-page">

		
		<!-- Section -->
		

		<div class='content2'>
            <form action="upload.php" class="dropzone" id="myAwesomeDropzone"> 
            </form>  
            </div> 
		<!-- Section / End -->

		<div class="divider"></div>
		<a href="add_feat.php" class="button preview margin-top-5">Continue <i class="fa fa-arrow-circle-right"></i></a>

		</div>
	</div>

</div>
</div>
  <!-- Script -->
        <script type='text/javascript'>
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;    
                
                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    data: {name: name,request: 2},
                    sucess: function(data){
                        console.log('success: ' + data);
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
        </script>
<?php include('inc/footer.php'); ?>