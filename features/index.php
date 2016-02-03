<?php 
$thisPage = "features";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); 
?>
<div id="featCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-container">
    <ol class="carousel-indicators">
      <li class="active" data-target="#featCarousel" data-slide-to="0"></li>
      <li data-target="#featCarousel" data-slide-to="1"></li>
      <li data-target="#featCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo BASE_URL; ?>img/features/feat_9.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/features/feat_10.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/features/feat_7.JPG" id="carousel-img">
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#featCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#featCarousel" role="button" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<div class="container">
  <h1 class="blue-head">Water Features</h1>
  <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_1.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_2.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_3.jpg">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_4.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_5.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_11.jpg">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_7.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_8.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_9.JPG">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_10.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>