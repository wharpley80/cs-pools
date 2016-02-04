<?php
$thisPage = "home";
require_once('inc/config.php'); 
include(ROOT_PATH . 'inc/header.php'); 
?>
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-container">
    <ol class="carousel-indicators">
      <li class="active" data-target="#homeCarousel" data-slide-to="0"></li>
      <li data-target="#homeCarousel" data-slide-to="1"></li>
      <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/commercial/comm_5.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="img/commercial/comm_7.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="img/infinity/infi_10.JPG" id="carousel-img">
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <h2>Commercial</h2>
      <a href="<?php echo BASE_URL; ?>commercial/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>commercial/">
        <img src="img/commercial/comm_3.JPG" class="home-img">
      </a>
    </div>
  </div> 
  <div class="row">
    <div class="col-xs-12 hidden-md hidden-lg">
      <h2>Residential</h2>
      <a href="<?php echo BASE_URL; ?>residential/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>residential/">
        <img src="img/residential/resident_1.JPG" class="home-img">
      </a>
    </div>
    <div class="col-md-6 hidden-xs hidden-sm">
      <h2>Residential</h2>
      <a href="<?php echo BASE_URL; ?>residential/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <h2>Water Features</h2>
      <a href="<?php echo BASE_URL; ?>features/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>features/">
        <img src="img/features/feat_6.jpg" class="home-img">
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 hidden-md hidden-lg">
      <h2>Paver Decks</h2>
      <a href="<?php echo BASE_URL; ?>decks/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>decks/">
        <img src="img/decks/deck_2.jpg" class="home-img">
      </a>
    </div>
    <div class="col-md-6 hidden-xs hidden-sm">
      <h2>Paver Decks</h2>
      <a href="<?php echo BASE_URL; ?>decks/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <h2>Spas</h2>
      <a href="<?php echo BASE_URL; ?>spas/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>spas/">
        <img src="img/spas/spa_9.jpg" class="home-img">
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 hidden-md hidden-lg">
      <h2>Infinity Edge</h2>
      <a href="<?php echo BASE_URL; ?>infinity/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>infinity/">
        <img src="img/infinity/infi_10.JPG" class="home-img">
    </div>
    <div class="col-md-6 hidden-xs hidden-sm">
      <h2>Infinity Edge</h2>
      <a href="<?php echo BASE_URL; ?>infinity/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
  </div>  
</div>
<div class="backdrop">
  <h1>About Us</h1>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>