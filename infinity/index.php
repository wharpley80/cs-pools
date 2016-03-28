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
  <h1 class="blue-head">Infinity Edge</h1>
  <p class="page-cont">
    Just like our other water features we take a lot of pride in our infinity edge. This type of pool isn't 
    just a feature it's a complete style of hardscape which depends on surrounding landscapes to create the 
    best effect. 
  </p>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i1"></span>
        <img class="view-img" id="imageresourcei1" src="<?php echo BASE_URL; ?>img/infinity/infi_1.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i2"></span>
        <img class="view-img" id="imageresourcei2" src="<?php echo BASE_URL; ?>img/infinity/infi_2.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i3"></span>
        <img class="view-img" id="imageresourcei3" src="<?php echo BASE_URL; ?>img/infinity/infi_3.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i4"></span>
        <img class="view-img" id="imageresourcei4" src="<?php echo BASE_URL; ?>img/infinity/infi_4.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i5"></span>
        <img class="view-img" id="imageresourcei5" src="<?php echo BASE_URL; ?>img/infinity/infi_5.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i6"></span>
        <img class="view-img" id="imageresourcei6" src="<?php echo BASE_URL; ?>img/infinity/infi_6.JPG">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i7"></span>
        <img class="view-img" id="imageresourcei7" src="<?php echo BASE_URL; ?>img/infinity/infi_7.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i8"></span>
    	 <img class="view-img" id="imageresourcei8" src="<?php echo BASE_URL; ?>img/infinity/infi_8.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i9"></span>
    	 <img class="view-img" id="imageresourcei9" src="<?php echo BASE_URL; ?>img/infinity/infi_9.JPG">
      </a>
    </div>
  </div>
    <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "i10"></span>
        <img class="view-img" id="imageresourcei10" src="<?php echo BASE_URL; ?>img/infinity/infi_10.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>