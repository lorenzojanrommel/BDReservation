<?php
  require '../condb.php';
  $id = $_POST['id'];
  // echo $id;
  $sql = "SELECT * FROM room_imgs WHERE img_id = '$id'";
  $results = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($results);
  extract($row);
  ?>
  <div class="container">
    <div class="delete_image_body" id="delete_image_body">
        <form method="post" action="delete_image_modal_endpoint.php?id=<?php echo $img_id; ?>&room_id=<?php echo $room_id;?>">
        <div class="modal-footer">
            <button type="submit" name="delete_image" class="btn btn-success ml-3">Yes</button>
            <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">No</button>
        </div>
        </form>
    </div>
  </div>

