<?php
  session_start();
?>
    <div class="d-flex justify-content-center">
      <a class="navbar-brand title d-none d-lg-block" href="index.php">Boarding House & Dormitories Finder</a>
    </div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
	<div class="d-flex justify-content-center">
  <a class="navbar-brand title d-none d-md-block d-lg-none mr-5 pr-5" href="index.php">Boarding House & Dormitories Finder</a>
  <a class="navbar-brand title d-sm-block d-md-none" href="index.php">BH&DF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav pl-3">
      <?php
        if (isset($_SESSION['username']) && $_SESSION['user_level'] == 1 && $_SESSION['user_status'] == 1) {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link d-lg-none" href="about.php">About</a>
      </li>
      <?php
      }
      if (isset($_SESSION['username'])) {
       ?>
       <li class="nav-item">
        <a class="nav-link border-left d-none d-sm-none d-md-none d-lg-block" href="logout.php">Logout</a>
        <a class="nav-link d-lg-none" href="logout.php">Logout</a>
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