<?php
  session_start();
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
  <a class="navbar-brand title" href="index.php">Boarding House & Dormitories Finder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
=======
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
=======
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
>>>>>>> parent of 17aaeb2... Adding user into database
      </li>
      <li class="nav-item">
        <a class="nav-link" href="room.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacts.php">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <?php
      if (isset($_SESSION['username'])) {
       ?>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
       </li>
       <?php
      }else{
      ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
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