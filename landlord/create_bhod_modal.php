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
                  <label for="NOYBHOD">Name</label>
                  <input type="text" id="noybhd" name="noybhd" class="form-control" placeholder="Name of Your Boarding House/Dormitory">
              </div>
           <!-- End of name of boarding house -->
           <!-- Address -->
             <div class="form-group col-sm-6">
                  <label for="Address">Address</label>
                  <input type="text" id="address" name="aoybhd" class="form-control" placeholder="Address of Your Boarding House/Dormitory">
              </div>
           <!-- End address -->
           <!-- Postcode -->
             <div class="form-group col-sm-6">
                  <label for="Postcode">Postcode</label>
                  <input type="text" id="postcode" name="pcoybhd" class="form-control" placeholder="Postcode of Your Boarding House/Dormitory">
              </div>
           <!-- End postcode -->
           <!-- Phone Number -->
             <div class="form-group col-sm-6">
                  <label for="pnumber">Phone Number</label>
                  <input type="text" id="pnumber" name="pnoybhd" class="form-control" placeholder="Phone Number of Your Boarding House/Dormitory">
              </div>
           <!-- End Phone Number -->
           <!-- Number of Rooms -->
           <div class="form-group col-sm-6">
                <label for="rnumber">Number of Rooms</label>
                <input type="number" id="rnumber" name="rnumber" class="form-control" placeholder="Number of Rooms of Your Boarding House/Dormitory" min="0">
            </div>
            <!-- End of Number of Rooms -->
         </div>
         <!-- Picture of the boarding house or dormitory -->
         <div class="form-group col-sm-12">
              <label for="BHDPicture">Picture of Your Boarding House/Dormitory</label>
              <input type="file" id="bhdpicture" name="poybhd" class="form-control-file" aria-describedby="fileHelp" placeholder="Picture of Your Boarding House/Dormitory">
          </div>
         <!-- End Picture of the boarding house or dormitory -->
         <!-- Mayors Permit picture of the boarding house or dormitory -->
         <div class="form-group col-sm-12">
              <label for="MPPicture">Mayors Permit Picture of Your Boarding House/Dormitory</label>
              <input type="file" id="mppicture" name="mpofbhd" class="form-control-file" aria-describedby="fileHelp" placeholder="Mayors Permit Picture of Your Boarding House/Dormitory">
          </div>
         <!-- End Mayors Permit picture of the boarding house or dormitory -->
         <!-- BIR picture of the boarding house or dormitory -->
         <div class="form-group col-sm-12">
              <label for="birpicture">BIR Picture of Your Boarding House/Dormitory</label>
              <input type="file" id="birpicture" name="biroybhd" class="form-control-file" aria-describedby="fileHelp" placeholder="BIR Picture of Your Boarding House/Dormitory">
          </div>
         <!-- End BIR picture of the boarding house or dormitory -->
         <!-- Business License Plate Picture -->
         <div class="form-group col-sm-12">
              <label for="blppoybhd">Business License Plate Picture of Your Boarding House/Dormitory</label>
              <input type="file" id="blppoybhd" name="blppoybhd" class="form-control-file" aria-describedby="fileHelp" placeholder="Business License Plate Picture of Your Boarding House/Dormitory">
          </div>
         <!-- End of Business License Plate Picture -->
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
