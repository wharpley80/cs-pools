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
<div class="modal fade modal" id="imagemodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <img class="modal-logo" src="<?php echo BASE_URL; ?>img/logo.png">
        <h3 class="call">Call For a FREE Estimate! (561) 441-9910</h3> 
      </div>
      <div class="modal-body" id="my-body">
        <img src="" id="imagepreview" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<div class="container">
  <h1 class="blue-head">Spas</h1>
  <p class="page-cont">
    Many of our spas are combined wih pools, and our plumbing for our pool/spa combos are the most functional
    and easiest to maintain in the pool bussiness. In our spas alone our superior plumbing allows us to create
    a delightful whirlpool experience for you!
  </p>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s1"></span>
        <img class="view-img" id="imageresources1" src="<?php echo BASE_URL; ?>img/spas/spa_1.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s2"></span>
        <img class="view-img" id="imageresources2" src="<?php echo BASE_URL; ?>img/spas/spa_2.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s3"></span>
        <img class="view-img" id="imageresources3" src="<?php echo BASE_URL; ?>img/spas/spa_3.JPG">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s4"></span>
        <img class="view-img" id="imageresources4" src="<?php echo BASE_URL; ?>img/spas/spa_4.JPG">
      </a>
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s5"></span>
        <img class="view-img" id="imageresources5" src="<?php echo BASE_URL; ?>img/spas/spa_5.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s6"></span>
        <img class="view-img" id="imageresources6" src="<?php echo BASE_URL; ?>img/spas/spa_6.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s7"></span>
        <img class="view-img" id="imageresources7" src="<?php echo BASE_URL; ?>img/spas/spa_7.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s8"></span>
    	  <img class="view-img" id="imageresources8" src="<?php echo BASE_URL; ?>img/spas/spa_8.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s9"></span>
    	  <img class="view-img" id="imageresources9" src="<?php echo BASE_URL; ?>img/spas/spa_9.jpg">
      </a>
    </div>
  </div>
    <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "s10"></span>
        <img class="view-img" id="imageresources10" src="<?php echo BASE_URL; ?>img/spas/spa_10.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>