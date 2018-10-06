<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
	require '../condb.php';
	$house_id = $_GET['id-house'];
	$house = "SELECT * FROM houses WHERE house_id = '$house_id'";
	$house_results = mysqli_query($conn, $house);
	$house_row = mysqli_fetch_assoc($house_results);
	extract($house_row);
	?>
	<div class="modal-body">
	<div class="container">
		<h3>Edit House</h3>
	  <form method='POST' action='edit_house_endpoint.php?house-id=<?php echo $house_id?>' enctype='multipart/form-data'>
	    <!-- Select for category -->
	    <div class="form-group">
	      <label for="Category">House Category</label>
	      <select class="form-control" id="category" name="category">
	        <?php
	          if ($house_category_id == '1') {
	          	?>
	        	<option disabled> Select your house category Dormitory/Boarding House</option>
	          	<option selected value="1">Boarding House</option>
	          	<option value="2">Dormitory</option>
	          	<?php
	          }elseif($house_category_id == '2'){
	          	?>
	          	<option disabled> Select your house category Dormitory/Boarding House</option>
	          	<option value="1">Boarding House</option>
	          	<option selected value="2">Dormitory</option>
	          	<?php
	          }
	        ?>
	      </select>
	    </div>
	    <!-- end of Select for category -->
	   <div class="form-row">
	    <!-- Name of boarding house/dormitory -->
	       <div class="form-group col-sm-6">
	            <label for="NOYBHOD">Business Name</label>
	            <input type="text" id="noybhd" name="noybhd" class="form-control" placeholder="Name of Your Boarding House/Dormitory" required value="<?php echo $house_name; ?>">
	        </div>
	     <!-- End of name of boarding house -->
	     <!-- Address -->
	       <div class="form-group col-sm-6">
	            <label for="Address">Business Location</label>
	            <input type="text" id="address" name="aoybhd" class="form-control" placeholder="ex. Morales Bldg, F. tañedo st. Brgy. San Nicolas, Tarlac City." title="ex. Morales Bldg, F. tañedo st. Brgy. San Nicolas, Tarlac City." required value="<?php echo $house_address; ?>">
	        </div>
	     <!-- End address -->
	     <!-- Phone Number -->
	       <div class="form-group col-sm-6">
	            <label for="pnumber">Phone Number</label>
	            <input type="text" id="pnumber" name="pnoybhd" class="form-control" placeholder="Phone Number of Your Boarding House/Dormitory" required ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' title='Phone Number (Format: +99(99)9999-9999)' value="<?php echo $house_phone_number; ?>">
	        </div>
	     <!-- End Phone Number -->
	     <!-- Number of Rooms -->
	     <div class="form-group col-sm-6">
	          <label for="rnumber">Number of Rooms</label>
	          <input type="number" id="rnumber" name="rnumber" class="form-control" placeholder="Number of Rooms of Your Boarding House/Dormitory" min="0" max="20" required ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='/[^0-9]/g,''' title='Room Number ex. 24' value="<?php echo $house_number_room; ?>">
	      </div>
	      <!-- End of Number of Rooms -->
	   </div>
	   <!-- Picture of the boarding house or dormitory -->
	   <div class="form-group col-sm-12">
	        <label for="BHDPicture">Picture of Your Boarding House/Dormitory</label>
	        <input type="file" id="bhdpicture" name="poybhd" class="form-control-file" aria-describedby="fileHelp" placeholder="Picture of Your Boarding House/Dormitory">
	    </div>
	   <!-- End Picture of the boarding house or dormitory -->
	   <!-- Business License Permit Picture -->
	   <div class="form-group col-sm-12">
	        <label for="blppoybhd">Business License Permit Picture of Your Boarding House/Dormitory</label>
	        <input type="file" id="blppoybhd" name="blppoybhd" class="form-control-file" aria-describedby="fileHelp" placeholder="Business License Permit Picture of Your Boarding House/Dormitory">
	    </div>
	   <!-- End of Business License Permit Picture -->
	   <!-- Confirm Business Plate no -->
	   <div class="form-group col-sm-6">
	        <label for="bussiness_place_no">Business Plate Number</label>
	        <input type="text" id="bussiness_place_no" name="bussiness_place_no" class="form-control" placeholder="Business Plate Number" required ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" title='4658' value="<?php echo $house_business_no; ?>">
	    </div>
	   <!-- End confirm Business plate No -->
	   <!-- Description of the boarding house or dormitory -->
	   <div class="form-group col-sm-12">
	        <label for="birpicture">Description</label>
	        <textarea class="form-control" id="description" name="bhddescription" placeholder="Description of Your Boarding House/Dormitory" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"><?php echo $house_description; ?></textarea>
	    </div>
	   <!-- End Description of the boarding house or dormitory -->
	 
	<div class="modal-footer">
		 <!-- <input type="submit" value="Save" class=" edit_house-button"> -->
		 <button type="submit" name="edit_house"  class="btn btn-warning edit_house-button">Save</button>
		 </form>
		</form>
	 <form action="owner_dashboard.php">
	  <button type="submit" class="btn btn-secondary edit_house-button" data-dismiss="modal">Close</button>
	  </form>
	 </div>
	</div>
	</div>
	<?php
}
	require '../template.php';
?>