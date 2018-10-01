<?php
  require '../condb.php';
?>
<div class="modal" id="create_bhod">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="bhod col-sm-10">
        <h5 class="modal-title">Create Your Boarding House/Dormitory</h5>
        </div>
        <div class="col-sm-2">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      </div>
      <div class="modal-body">
       <div class="container-fluid">
        <form method='POST' action='add_bhod.php' enctype='multipart/form-data'>
          <!-- Select for category -->
          <div class="form-group">
            <label for="Category">House Category</label>
            <select class="form-control" id="category" name="category">
              <option selected disabled> Select your house category Dormitory/Boarding House</option>
              <?php
                $sql = "SELECT * FROM categories";
                $results = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($results)) {
                  extract($row);
                  echo "<option value='$id'> $house_category </option>";
                }
              ?>
            </select>
          </div>
          <!-- end of Select for category -->
         <div class="form-row">
          <!-- Name of boarding house/dormitory -->
             <div class="form-group col-sm-6">
                  <label for="NOYBHOD">Business Name</label>
                  <input type="text" id="noybhd" name="noybhd" class="form-control" placeholder="Name of Your Boarding House/Dormitory" required>
              </div>
           <!-- End of name of boarding house -->
           <!-- Address -->
             <div class="form-group col-sm-6">
                  <label for="Address">Business Location</label>
                  <input type="text" id="address" name="aoybhd" class="form-control" placeholder="ex. Morales Bldg, F. tañedo st. Brgy. San Nicolas, Tarlac City." title="ex. Morales Bldg, F. tañedo st. Brgy. San Nicolas, Tarlac City." required>
              </div>
           <!-- End address -->
           <!-- Phone Number -->
             <div class="form-group col-sm-6">
                  <label for="pnumber">Phone Number</label>
                  <input type="text" id="pnumber" name="pnoybhd" class="form-control" placeholder="Phone Number of Your Boarding House/Dormitory" required ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' title='Phone Number (Format: +99(99)9999-9999)'>
              </div>
           <!-- End Phone Number -->
           <!-- Number of Rooms -->
           <div class="form-group col-sm-6">
                <label for="rnumber">Number of Rooms</label>
                <input type="number" id="rnumber" name="rnumber" class="form-control" placeholder="Number of Rooms of Your Boarding House/Dormitory" min="0" max="20" required ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='/[^0-9]/g,''' title='Room Number ex. 24'>
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
              <input type="text" id="bussiness_place_no" name="bussiness_place_no" class="form-control" placeholder="Business Plate Number" required ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" title='4658'>
          </div>
         <!-- End confirm Business plate No -->
         <!-- Description of the boarding house or dormitory -->
         <div class="form-group col-sm-12">
              <label for="birpicture">Description</label>
              <textarea class="form-control" id="description" name="bhddescription" placeholder="Description of Your Boarding House/Dormitory" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
          </div>
         <!-- End Description of the boarding house or dormitory -->
       </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit" value="Save" class="btn btn-warning">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>
  </div>
</div>

