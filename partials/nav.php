<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
  require '../condb.php';
  }else{
    require 'condb.php';
  }
?>
    <div class="d-flex justify-content-center">
      <a class="navbar-brand title d-none d-lg-block" href="../admin/../../BDReservation/index.php">Boarding House & Dormitories Finder</a>
    </div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
	<div class="d-flex justify-content-center">
  <a class="navbar-brand title d-none d-md-block d-lg-none mr-5 pr-5" href="/index.php">Boarding House & Dormitories Finder</a>
  <a class="navbar-brand title d-sm-block d-md-none" href="BDReservation/../../../BDReservation/admin/index.php">BH&DF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav pl-3">
      <?php
        if (isset($_SESSION['username']) && $_SESSION['user_level'] == 1 && $_SESSION['user_status'] == 1) {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="BDReservation/../../../BDReservation/admin/dashboard.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/admin/house.php">House</a>
          <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/admin/house.php">House</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="pending_bhod.php">Pending</a> -->
          <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/admin/user_list.php">User List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/admin/user_list.php">User List</a>
          <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/admin/user_list.php">User List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="add_admin.php">Add Admin</a>
          <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/admin/add_admin.php">Add Addmin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="../admin/../../BDReservation/about.php">About</a>
          <a class="nav-link d-lg-none" href="../admin/../../BDReservation/about.php">About</a>
        </li>
      <?php
      }elseif(isset($_SESSION['username']) && $_SESSION['user_level'] == 2 && $_SESSION['user_status'] == 1){
        ?>
          <li class="nav-item">
            <a class="nav-link" href="BDReservation/../../../BDReservation/landlord/owner_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <?php
            $user = $_SESSION['username'];
            $sql = "SELECT * FROM users WHERE username = '$user'";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            extract($row);
            $sql1 = "SELECT * FROM houses WHERE user_id = '$id'";
            $results1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($results1) > 0 ) {
            $row1 = mysqli_fetch_assoc($results1);
            extract($row1);
            // echo $house_status;
            if ($house_status == 3) {
              ?>
              <li class="nav-item">
                <span class="nav-link border-left d-none d-sm-none d-md-none d-lg-block disabled" href="BDReservation/../../../BDReservation/landlord/add_room.php" disabled>Add Room</span>
                <span class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/add_room.php" disabled>Add Room</span>
              </li>
              <?php
            }elseif ($house_status == 4) {
              ?>
              <li class="nav-item">
                <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/landlord/add_room.php">Add Room</a>
                <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/add_room.php">Add Room</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/landlord/booking.php">Booking</a>
                <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/booking.php">Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/landlord/room_availability.php">Room Availability</a>
                <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/room_availability.php">Room Availability</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/landlord/find.php">Find</a>
                <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/find.php">Find</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/landlord/payments.php">Payments</a>
                <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/payments.php">Payments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="BDReservation/../../../BDReservation/landlord/cancel.php">Cancel</a>
                <a class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/cancel.php">Cancel</a>
              </li>
              <?php
            }
          }else{
            ?>
            <li class="nav-item">
              <span class="nav-link border-left d-none d-sm-none d-md-none d-lg-block disabled" href="BDReservation/../../../BDReservation/landlord/add_room.php" disabled>Add Room</span>
              <span class="nav-link d-lg-none" href="BDReservation/../../../BDReservation/landlord/add_room.php" disabled>Add Room</span>
            </li>
            <?php
          }
          ?>
        <?php
      }elseif(isset($_SESSION['username']) && $_SESSION['user_level'] == 3 && $_SESSION ['user_status'] == 1){
        ?>
          <li class="nav-item">
            <a class="nav-link" href="customer_dashboard.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="room.php">Rooms</a>
            <a class="nav-link d-lg-none" href="room.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="contacts.php">Contacts</a>
            <a class="nav-link d-lg-none" href="contacts.php">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="about.php">About</a>
            <a class="nav-link d-lg-none" href="about.php">About</a>
          </li>
        <?php
      }else{
      ?>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="room.php">Rooms</a>
        <a class="nav-link d-lg-none" href="room.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="contacts.php">Contacts</a>
        <a class="nav-link d-lg-none" href="contacts.php">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="about.php">About</a>
        <a class="nav-link d-lg-none" href="BDReservation/../about.php">About</a>
      </li>
      <?php
      }
      if (isset($_SESSION['username'])) {
       ?>
       <li class="nav-item">
        <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="../../BDReservation/logout.php">Logout</a>
        <a class="nav-link d-lg-none" href="../logout.php">Logout</a>
       </li>
       <?php
      }else{
      ?>
      <li class="nav-item">
        <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="login.php">Login</a>
        <a class="nav-link d-lg-none" href="login.php">Login</a>
      </li>
      <?php
        }
      ?>
    </ul>
  </div>
  </div>
</nav>
<section>
  <div class="welcome">
    <div class="container">
      Welcome <?php 
        if (isset($_SESSION['fname'])) {
          echo $_SESSION['fname'];
        }else {
          echo "Guest!";
        }
        ?>
    </div>
  </div>
</section>