<div class="modal" id="add_room_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-sm-10">
        <h5 class="add-room-title">Add Room</h5>
        </div>
        <div class="col-sm-2">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      </div>
        <div class="modal-body">
          <div class="container">
          <form method='POST' action='add_room_endpoint.php' enctype='multipart/form-data'>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <!-- Select for category -->
                  <label for="room_type">Room Type</label>
                  <select class="form-control" id="room-type" name="room-type">
                    <option selected disabled>Room Type</option>
                    <?php
                      $sql = "SELECT * FROM room_types";
                      $results = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($results)) {
                        extract($row);
                        echo "<option value='$id'> $type </option>";
                      }
                    ?>
                  </select>
                  <!-- end of Select for category -->
                </div>
              </div>
              <div class="col-sm-6">
                <!-- Room Number-->
                <div class="form-group col-sm-12">
                    <label for="room-number">Room Number</label>
                    <input type="text" id="room-number" name="room-number" class="form-control" placeholder="Input Room Number ">
                 </div>
                <!-- End of Room Number-->
              </div>
            </div>
            <input type="hidden" name="house-id" value="<?php echo $house_id ?>">
            <div class="form-row">
              <!-- Price Room -->
              <div class="form-group col-sm-12">
                  <label for="price">Price</label>
                  <input type="text" id="price" name="price" class="form-control" placeholder="Input your Room Price">
               </div>
              <!-- End of Price Room-->
              <!-- Room Availavility -->
              <div class="form-group col-sm-12">
                  <label for="availability">Room Availability</label>
                  <input type="number" id="availability" name="availability" class="form-control" min="1" max="6">
               </div>
              <!-- End of Room Availavility-->
              <!-- First Picture-->
             <div class="form-group col-sm-12">
                  <label for="room-pic-1">First Picture of Room</label>
                  <input type="file" id="room-pic-1" name="room-pic-1" class="form-control-file" aria-describedby="fileHelp" placeholder="First Picture of Room">
              </div>
              <!-- End of first Picture -->
              <!-- Second Picture-->
              <div class="form-group col-sm-12">
                   <label for="room-pic-2">Second Picture of Room</label>
                   <input type="file" id="room-pic-2" name="room-pic-2" class="form-control-file" aria-describedby="fileHelp" placeholder="Second Picture of Room">
               </div>
              <!-- End of Second Picture -->
              <!-- Third Picture-->
               <div class="form-group col-sm-12">
                    <label for="room-pic-3">Third Picture of Room</label>
                    <input type="file" id="room-pic-3" name="room-pic-3" class="form-control-file" aria-describedby="fileHelp" placeholder="Third Picture of Room">
                </div>
              <!-- End of Third Picture -->
              <!-- Fourth Picture-->
              <div class="form-group col-sm-12">
                   <label for="room-pic-4">Fourth Picture of Room</label>
                   <input type="file" id="room-pic-4" name="room-pic-4" class="form-control-file" aria-describedby="fileHelp" placeholder="Fourth Picture of Room">
               </div>
               <!-- End of Fourth Picture -->
            </div>
          <div class="modal-footer">
             <input type="submit" name="approve_submit" value="Add" class="btn btn-success ml-3">
             <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
          </form>
          </div>
          </div>
        </div>
    </div>
  </div>
</div>