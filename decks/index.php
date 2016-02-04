<?php 
$thisPage = "decks";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); 
?>
<div id="deckCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-container">
    <ol class="carousel-indicators">
      <li class="active" data-target="#deckCarousel" data-slide-to="0"></li>
      <li data-target="#deckCarousel" data-slide-to="1"></li>
      <li data-target="#deckCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo BASE_URL; ?>img/decks/deck_6.jpg" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/decks/deck_3.jpg" id="carousel-img">
      </div>
      <div class="item">
        <img src="<?php echo BASE_URL; ?>img/decks/deck_1.jpg" id="carousel-img">
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#deckCarousel" role="button" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#deckCarousel" role="button" data-slide="next">
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
  <h1 class="blue-head">Paver Decks</h1>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d1"></span>
        <img class="view-img" id="imageresourced1" src="<?php echo BASE_URL; ?>img/decks/deck_1.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d2"></span>
        <img class="view-img" id="imageresourced2" src="<?php echo BASE_URL; ?>img/decks/deck_2.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d3"></span>
        <img class="view-img" id="imageresourced3" src="<?php echo BASE_URL; ?>img/decks/deck_3.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d4"></span>
        <img class="view-img" id="imageresourced4" src="<?php echo BASE_URL; ?>img/decks/deck_4.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d5"></span>
        <img class="view-img" id="imageresourced5" src="<?php echo BASE_URL; ?>img/decks/deck_5.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d6"></span>
        <img class="view-img" id="imageresourced6" src="<?php echo BASE_URL; ?>img/decks/deck_6.jpg">
      </a>
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d7"></span>
        <img class="view-img" id="imageresourced7" src="<?php echo BASE_URL; ?>img/decks/deck_7.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d8"></span>
    	 <img class="view-img" id="imageresourced8" src="<?php echo BASE_URL; ?>img/decks/deck_8.jpg">
      </a>
    </div>
    <div class="col-md-4" id="photo-grid">
      <a href="#" class="thumbnail" data-toggle="modal"><span data-id= "d9"></span>
    	 <img class="view-img" id="imageresourced9" src="<?php echo BASE_URL; ?>img/decks/deck_9.jpg">
      </a>
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>