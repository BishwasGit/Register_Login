<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
   $_SESSION['msg'] = "You must log in first";
   header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['username']);
   header("location: ../login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
</head>
<?php
	include 'links/bootstrap.php'
?>
<?php
	include 'css/style.php'
?>
<body>
  <?php  if (isset($_SESSION['username'])) : ?>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
 	<div class="container">
 		<span class="welcome">Welcome <?php echo $_SESSION['username']; ?></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="foodmenu.php">Foods Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?logout='1'">Logout</a> 
      <?php endif ?>
      </li>
    </ul>
  </div>
 	</div>
</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/11.jpg" class="d-block w-100" alt="Image Slides">
       <div class="carousel-caption d-none d-md-block">
        <h5>Welcome <?php echo $_SESSION['username']; ?></h5>
        <p>Have a great day, <?php echo $_SESSION['username']; ?>
        <p>Enjoy your stay</p>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/9.jpg" class="d-block w-100" alt="Image Slides">
       <div class="carousel-caption d-none d-md-block">
        <h5>Welcome <?php echo $_SESSION['username']; ?></h5>
        <p>Have a great day, <?php echo $_SESSION['username']; ?></p>
        <p>Enjoy your stay</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/10.jpg" class="d-block w-100" alt="Image Slides">
       <div class="carousel-caption d-none d-md-block">
        <h5>Welcome <?php echo $_SESSION['username']; ?></h5>
        <p>Have a great day, <?php echo $_SESSION['username']; ?></p>
        <p>Enjoy your stay</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
	include 'links/js.php'
?>
</body>
</html>