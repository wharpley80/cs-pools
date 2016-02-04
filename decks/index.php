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
<div class="container">
  <h1 class="blue-head">Paver Decks</h1>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_1.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_2.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_3.jpg">
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_4.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_5.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_6.jpg">
    </div>
  </div>
  <div class="row" id="grid-row">
    <div class="col-md-4" id="photo-grid">
      <img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_7.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_8.jpg">
    </div>
    <div class="col-md-4" id="photo-grid">
    	<img class="img-responsive" src="<?php echo BASE_URL; ?>img/decks/deck_9.jpg">
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>