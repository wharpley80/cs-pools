<?php 
$thisPage = "spas";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); 
?>
<div id="spaCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-container">
    <ol class="carousel-indicators">
      <li class="active" data-target="#spaCarousel" data-slide-to="0"></li>
      <li data-target="#spaCarousel" data-slide-to="1"></li>
      <li data-target="#spaCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo BASE_URL; ?>img/spas/spa_10.jpg" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/spas/spa_9.jpg" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/spas/spa_6.jpg" id="carousel-img">
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#spaCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#spaCarousel" role="button" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<div class="container">
  <h1 class="blue-head">Spas</h1>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_1.jpg">
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
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_4.JPG">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_5.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_6.jpg">
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_7.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_8.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_9.jpg">
    </div>
  </div>
    <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/spas/spa_10.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>