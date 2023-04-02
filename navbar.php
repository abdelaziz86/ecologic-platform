<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<nav class="navbar navbar-expand-lg navbar-light bg-light" style="/*background-color: #02143F !important;*/ ">
  <a class="navbar-brand" href="#">
    <i class="fa fa-globe" style="font-size:24px; margin-left: 20px"></i> Ecologic Platform
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right">
    <ul class="navbar-nav mr-auto">
      <?php if (isset($_SESSION['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color : black">Bienvenue <span style="font-style: italic; font-weight: 600"><?php echo $_SESSION["name"] ?> /</span></a>
        </li>
      <?php } ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" >
        <?php if (isset($_SESSION['username'])) { ?>
          <a class="nav-link" href="logout.php" style="margin-right: 30px">Logout</a>

        <?php } else { ?> 
          <a class="nav-link" href="login.php" style="margin-right: 30px">Login</a>
        <?php } ?>

      </li>
    </ul>
  </div>
</nav>
