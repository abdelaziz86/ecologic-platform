<!DOCTYPE html>
<html>
<head>
	<title>Ecologic Platform</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	body {
		background: linear-gradient(217deg, rgba(2,42,138,.8), rgba(2,42,138,0) 80.71%), linear-gradient(127deg, rgba(45,62,102,.8), rgba(45,62,102,0) 80.71%), linear-gradient(336deg, rgba(12,31,73,.8), rgba(12,31,73,0) 90.71%) !important;
		background-repeat: no-repeat !important ; 
		height : AUTO;

	}

	.carousell {
		margin-top: 70px;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
		width: 80%; 
	}
</style>
<body>
	<?php 
	session_start() ; 
	require_once 'navbar.php' ; 
	?>


	<!-- ============= CAROUSEL IMAGES ============== -->
	 <center>
		 <!-- <h2>CAROUSEL IMAGES</h2> -->
<div id="carouselExampleControls" class="carousel slide carousell" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.jpg?s=612x612&w=0&k=20&c=A63koPKaCyIwQWOTFBRWXj_PwCrR4cEoOw2S9Q7yVl8=" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.jpg?s=612x612&w=0&k=20&c=A63koPKaCyIwQWOTFBRWXj_PwCrR4cEoOw2S9Q7yVl8=" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





	 </center>






<?php include 'footer.php' ;  ?>


</body>
</html>