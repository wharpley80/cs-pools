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
<div class="backdrop">
  <div class="us-cont">
    <h2 class="about-head">About Us</h2>
    <p class="about">
      We are a small family owned company. We have been building residential and commercial pools in Florida,
      up the east coast all the way to Boston, and in the far reaches of the Carribean Sea. We have been in bussiness
      for 15 years, but have well over 65 combined years of experience between the 4 of us.
    </p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <h2>Commercial</h2>
      <div class="hidden-xs hidden-sm col-lg-12">
        <p class="content">
          Commercial Projects can be very difficult and time consuming, but we welcome the challenge. 
          We take great pride in our Commercial Projects and take on anything from water slide parks to lap
          lane pools.
        </p>
        <a href="<?php echo BASE_URL; ?>commercial/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>commercial/">
        <img src="img/commercial/comm_3.JPG" class="home-img">
      </a>
      <div class="col-xs-12 hidden-md hidden-lg">
        <p class="content">
          Commercial Projects can be very difficult and time consuming, but we welcome the challenge. 
          We take great pride in our Commercial Projects and take on anything from water slide parks to lap
          lane pools.
        </p>
      </div>
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
      <div class="col-xs-12 hidden-md hidden-lg">
        <p class="content">
          We personally enjoy going through the building process with our Residential Clients. Wheather the 
          Homeowner knows exactly what they want or if they need a little inspiration. We love making your backyard
          dreams come true.
        </p>
      </div>
    </div>
    <div class="col-md-6 hidden-xs hidden-sm">
      <h2>Residential</h2>
      <p class="content">
        We personally enjoy going through the building process with our Residential Clients. Wheather the 
        Homeowner knows exactly what they want or if they need a little inspiration. We love making your backyard
        dreams come true.
      </p>
      <a href="<?php echo BASE_URL; ?>residential/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <h2>Water Features</h2>
      <div class="hidden-xs hidden-sm col-lg-12">
        <p class="content">
          Water Features are by far our favorite part of building pools. From slides and illuminated deck 
          spitters to water walls and waterfalls. With our superior knowledge of hydraulics and our love 
          for fun in the water. We are the company to make those dreams come true!
        </p>
        <a href="<?php echo BASE_URL; ?>features/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>features/">
        <img src="img/features/feat_6.jpg" class="home-img">
      </a>
      <div class="col-xs-12 hidden-md hidden-lg">
        <p class="content">
          Water Features are by far our favorite part of building pools. From slides and illuminated deck 
          spitters to water walls and waterfalls. With our superior knowledge of hydraulics and our love 
          for fun in the water. We are the company to make those dreams come true!
        </p>
      </div>
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
      <div class="col-xs-12 hidden-md hidden-lg">
        <p class="content">
          Not only will we install your paver patio around your pool with professional quality. We will also
          install your driveway and any other side walk or walk way around your property. Our crew is experienced 
          in any type of paver. Such as concrete pavers, marble pavers, and travertine pavers. 
        </p>
      </div>
    </div>
    <div class="col-md-6 hidden-xs hidden-sm">
      <h2>Paver Decks</h2>
      <p class="content">
        Not only will we install your paver patio around your pool with professional quality. We will also
        install your driveway and any other side walk or walk way around your property. Our crew is experienced 
        in any type of paver. Such as concrete pavers, marble pavers, and travertine pavers. 
      </p>
      <a href="<?php echo BASE_URL; ?>decks/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <h2>Spas</h2>
      <div class="hidden-xs hidden-sm col-lg-12">
        <p class="content">
          Many of our spas are combined wih pools, and our plumbing for our pool/spa combos are the most functional
          and easiest to maintain in the pool bussiness. In our spas alone our superior plumbing allows us to create
          a delightful whirlpool experience for you!
        </p>
        <a href="<?php echo BASE_URL; ?>spas/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <a href="<?php echo BASE_URL; ?>spas/">
        <img src="img/spas/spa_9.jpg" class="home-img">
      </a>
      <div class="col-xs-12 hidden-md hidden-lg">
        <p class="content">
          Many of our spas are combined wih pools, and our plumbing for our pool/spa combos are the most functional
          and easiest to maintain in the pool bussiness. In our spas alone our superior plumbing allows us to create
          a delightful whirlpool experience for you!
        </p>
      </div>
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
      </a>
      <div class="col-xs-12 hidden-md hidden-lg">
        <p class="content">
          Just like our other water features we take a lot of pride in our infinity edge. This type of pool isn't 
          just a feature it's a complete style of hardscape which depends on surrounding landscapes to create the 
          best effect. 
        </p>
      </div>
    </div>
    <div class="col-md-6 hidden-xs hidden-sm">
      <h2>Infinity Edge</h2>
      <p class="content">
        Just like our other water features we take a lot of pride in our infinity edge. This type of pool isn't 
        just a feature it's a complete style of hardscape which depends on surrounding landscapes to create the 
        best effect. 
      </p>
      <a href="<?php echo BASE_URL; ?>infinity/" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-eye-open"></span>VIEW MORE</a>
    </div>
  </div>  
</div>
<!--
<div class="backdrop">
  <h1>About Us</h1>
</div>
-->
<?php include(ROOT_PATH . 'inc/footer.php'); ?>