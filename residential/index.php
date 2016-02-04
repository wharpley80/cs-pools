<?php 
$thisPage = "resident";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); 
?>
<div id="residCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-container">
    <ol class="carousel-indicators">
      <li class="active" data-target="#residCarousel" data-slide-to="0"></li>
      <li data-target="#residCarousel" data-slide-to="1"></li>
      <li data-target="#residCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo BASE_URL; ?>img/residential/resident_1.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/features/feat_5.jpg" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/spas/spa_2.jpg" id="carousel-img">
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#residCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#residCarousel" role="button" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<div class="container">
  <h1 class="blue-head">Residential</h1>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_10.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_2.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_5.jpg">
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/features/feat_11.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_2.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_3.JPG">
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_6.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_7.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/infinity/infi_3.jpg">
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/residential/resident_1.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
 </div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>