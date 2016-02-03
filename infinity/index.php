<?php 
$thisPage = "infinity";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); 
?>
<div id="infiCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-container">
    <ol class="carousel-indicators">
      <li class="active" data-target="#infiCarousel" data-slide-to="0"></li>
      <li data-target="#infiCarousel" data-slide-to="1"></li>
      <li data-target="#infiCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo BASE_URL; ?>img/infinity/infi_10.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/infinity/infi_8.jpg" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/infinity/infi_3.jpg" id="carousel-img">
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#infiCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#infiCarousel" role="button" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<div class="container">
  <h1 class="blue-head">Infinity Edge</h1>
  <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_1.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_2.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_3.jpg">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_4.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_5.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_6.JPG">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_7.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_8.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_9.JPG">
    </div>
  </div>
    <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_10.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>