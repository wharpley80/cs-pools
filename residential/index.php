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
  <h1 class="blue-head">Residential</h1>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r1"></span>
        <img class="view-img" id="imageresourcer1" src="<?php echo BASE_URL; ?>img/features/feat_10.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r2"></span>
        <img class="view-img" id="imageresourcer2" src="<?php echo BASE_URL; ?>img/features/feat_2.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r3"></span>
        <img class="view-img" id="imageresourcer3" src="<?php echo BASE_URL; ?>img/features/feat_5.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r4"></span>
        <img class="view-img" id="imageresourcer4" src="<?php echo BASE_URL; ?>img/features/feat_11.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r5"></span>
        <img class="view-img" id="imageresourcer5" src="<?php echo BASE_URL; ?>img/spas/spa_2.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r6"></span>
        <img class="view-img" id="imageresourcer6" src="<?php echo BASE_URL; ?>img/spas/spa_3.JPG">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r7"></span>
        <img class="view-img" id="imageresourcer7" src="<?php echo BASE_URL; ?>img/spas/spa_6.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r8"></span>
        <img class="view-img" id="imageresourcer8" src="<?php echo BASE_URL; ?>img/spas/spa_7.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r9"></span>
        <img class="view-img" id="imageresourcer9" src="<?php echo BASE_URL; ?>img/infinity/infi_3.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "r10"></span>
        <img class="view-img" id="imageresourcer10" src="<?php echo BASE_URL; ?>img/residential/resident_1.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
 </div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>