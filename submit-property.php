<?php 
include('core/session.php');
include('core/user_logic.php');
include('core/user_select.php');
include('inc/user_header.php'); 
 ?>

 

<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Add Property</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<form method="post">
	<div class="col-md-12">
		<div class="submit-page">

		<!-- Section -->
		<h3>Basic Information</h3>
		<div class="submit-section">

			<!-- Title -->
			<div class="form">
				<h5>Property Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input class="search-field" type="text" name="title" />
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Status -->
				<div class="col-md-6">
					
					<h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input  data-unit="Naira" name="price" type="text">
					
				</div>
				</div>

				<!-- Type -->
				<div class="col-md-6">
					<h5>Type</h5>
					<select name="type" class="chosen-select-no-single" >
						<option label="blank"></option>		
						<option value="Bungalow">Bungalow</option>
                         <option value="Duplex">Duplex</option>
                          <option value="Flat">Flat</option>
                           <option value="House">House</option>
                            <option value="Industrial Building">Industrial Building</option>
                             <option value="Office">Office Space</option>
                              <option value="Land">Land</option>
                              <option value="Shop">Shop/Showroom</option>
                              <option value="Store Room">Store Room</option>
                            <option value="Warehouse">Warehouse</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Row -->
			<div class="row with-forms">

				
				
				<!-- Area -->
				<div class="col-md-6">
					<h5>Bedrooms</h5>
					<select name="rooms" class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>More than 10</option>
					</select>
				</div>

				<!-- Rooms -->			
				<div class="col-md-6">
					<h5>Bathrooms</h5>
					<select name="bathrooms"  class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>More than 10</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->

		<!-- Section -->
		<h3>Location</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Address -->
				<div class="col-md-12">
					<h5>Address</h5>
					
					<input required="" type="text"  onFocus="initializeAutocomplete()" id="locality"  name="address" >
                    <input type="hidden" name="latitude" id="latitude" placeholder="Latitude" value="" >
                     <input type="hidden" name="longitude" id="longitude" placeholder="Longitude" value="" >
                      <input type="hidden" name="city" id="city" placeholder="City" value="" >
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>State</h5>
					  <select required=""  class="chosen-select-no-single"  name="state" id="state1" onchange="change_location();">
                                             <option></option>
                                        <?php
                                            while ($re_st = mysqli_fetch_array($stlg)) {
                                            echo '<option value="'.$re_st['state'].'" >
                                            '.$re_st['state'].'</option>';
                                                    }
                                                    ?>
                                                </select>
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>City</h5>
					<select required=""  name="lga" id="city2" class="form-control" name="choose-state">
                                            <option></option>
                                            
                                        </select>
				</div>

				<!-- Zip-Code -->
				

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Detailed Information</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Description</h5>
				<textarea name="editor1"></textarea>
                                        <script>
                                                CKEDITOR.replace( 'editor1' );
                                        </script>
			</div>

		

		</div>
		<!-- Section / End -->

		<div class="row with-forms">

				<!-- Name -->
				<div class="col-md-4">
					<h5>Name</h5>
					<input name="fullname" value="<?php echo $row['name'] ?>"  type="text">
				</div>

				<!-- Email -->
				<div class="col-md-4">
					<h5>E-Mail</h5>
					<input  name="email" value="<?php echo $row['email'] ?>" type="text">
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Phone <span>(optional)</span></h5>
					<input name=""phone value="<?php echo $row['phone'] ?>" type="text">

					 <input type="text" readonly="" value="<?php echo $row['phone'] ?>"  class="input-text" name="phone"  placeholder="Phone">

                       <input type="hidden"  value="<?php echo $row['occupation'] ?>"  class="input-text" name="occupation"  placeholder="Phone">

                       <input type="hidden"  value="<?php echo $row['user_code'] ?>"  class="input-text" name="user_code"  placeholder="Phone">
				</div>

			</div>


		<!-- Section -->
		


		<div class="divider"></div>
		<button name="sub-pro" type="submit" class="button preview margin-top-5">Submit <i class="fa fa-arrow-circle-right"></i></button>

		</div>
	</div>
	</form>

</div>
</div>


                    <script type="text/javascript">
  function initializeAutocomplete(){
    var input = document.getElementById('locality');
    // var options = {
    //   types: ['(regions)'],
    //   componentRestrictions: {country: "IN"}
    // };
    var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      // to set city name, using the locality param
      var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("city").value = val;
        }
      }
      document.getElementById("latitude").value = lat;
      document.getElementById("longitude").value = lng;
      document.getElementById("location_id").value = placeId;
    });
  }
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec&libraries=places&callback=initAutocomplete"
        async defer></script>

         <script>
function change_location()
{
    var state1 = $("#state1").val();
    
       $.ajax({
        type: "POST",
        url: "core/get_city.php",
        data: "state1="+state1,
        cache: false,
        success: function(response)
            {
                    //alert(response);return false;
                $("#city2").html(response);
            }
            });
    
}
</script>

<?php include('inc/footer.php'); ?>