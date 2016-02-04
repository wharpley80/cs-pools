<?php 
$thisPage = "commercial";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); 
?>

<div id="commCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-container">
    <ol class="carousel-indicators">
      <li class="active" data-target="#commCarousel" data-slide-to="0"></li>
      <li data-target="#commCarousel" data-slide-to="1"></li>
      <li data-target="#commCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo BASE_URL; ?>img/commercial/comm_7.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/commercial/comm_3.JPG" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/commercial/comm_5.JPG" id="carousel-img">
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#commCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#commCarousel" role="button" data-slide="next">
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
  <h1 class="blue-head">Commercial</h1>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "c1"></span>
        <img class="view-img" id="imageresourcec1" src="<?php echo BASE_URL; ?>img/commercial/comm_9.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "c2"></span>
        <img class="view-img" id="imageresourcec2" src="<?php echo BASE_URL; ?>img/commercial/comm_6.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "c3"></span>
        <img class="view-img" id="imageresourcec3" src="<?php echo BASE_URL; ?>img/commercial/comm_8.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "c4"></span>
        <img class="view-img" id="imageresourcec4" src="<?php echo BASE_URL; ?>img/commercial/comm_1.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "c5"></span>
        <img class="view-img" id="imageresourcec5" src="<?php echo BASE_URL; ?>img/commercial/comm_2.JPG">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "c6"></span>
        <img class="view-img" id="imageresourcec6" src="<?php echo BASE_URL; ?>img/commercial/comm_3.JPG">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "c7"></span>
        <img class="view-img" id="imageresourcec7" src="<?php echo BASE_URL; ?>img/commercial/comm_4.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
    <div class="col-md-4" id="photo-grid">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>