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
  <h1 class="blue-head">Water Features</h1>
  <p class="page-cont">
    Water Features are by far our favorite part of building pools. From slides and illuminated deck 
    spitters to water walls and waterfalls. With our superior knowledge of hydraulics and our love 
    for fun in the water. We are the company to make those dreams come true!
  </p>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f1"></span>
        <img class="view-img" id="imageresourcef1" src="<?php echo BASE_URL; ?>img/features/feat_1.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f2"></span>
        <img class="view-img" id="imageresourcef2" src="<?php echo BASE_URL; ?>img/features/feat_2.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f3"></span>
        <img class="view-img" id="imageresourcef3" src="<?php echo BASE_URL; ?>img/features/feat_3.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f4"></span>
        <img class="view-img" id="imageresourcef4" src="<?php echo BASE_URL; ?>img/features/feat_4.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f5"></span>
        <img class="view-img" id="imageresourcef5" src="<?php echo BASE_URL; ?>img/features/feat_5.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f6"></span>
        <img class="view-img" id="imageresourcef6" src="<?php echo BASE_URL; ?>img/features/feat_11.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f7"></span>
        <img class="view-img" id="imageresourcef7" src="<?php echo BASE_URL; ?>img/features/feat_7.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f8"></span>
    	 <img class="view-img" id="imageresourcef8" src="<?php echo BASE_URL; ?>img/features/feat_8.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f9"></span>
    	 <img class="view-img" id="imageresourcef9" src="<?php echo BASE_URL; ?>img/features/feat_9.JPG">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "f10"></span>
        <img class="view-img" id="imageresourcef10" src="<?php echo BASE_URL; ?>img/features/feat_10.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>