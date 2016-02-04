<!DOCTYPE HTML>
<html>
<head>
  <title>CS Pool Designs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Raleway" rel="stylesheet" type="text/css">
  <link href="<?php echo BASE_URL; ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo BASE_URL; ?>css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="<?php echo BASE_URL; ?>css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo BASE_URL; ?>css/main.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="<?php echo BASE_URL; ?>img/logo.png" class="main-logo pull-left">
      <h3 class="call">Call For a FREE Estimate! (561) 441-9910</h3> 
      <ul class="nav navbar-nav pull-right" id="top-icons">
        <li>
          <a href="mailto:cspooldesigns@aol.com"><img src="<?php echo BASE_URL; ?>img/icons/aol-mail.png" alt="AOL Logo" class="social-icon"></a>
        </li>
        <li>
          <a href="https://www.facebook.com/CS-Pool-Designs-1558628061128519/"><img src="<?php echo BASE_URL; ?>img/icons/fb-icon.png" alt="FB-logo" class="social-icon"></a>
        </li>
        <li>
          <a href="https://www.instagram.com/cspooldesigns/"><img src="<?php echo BASE_URL; ?>img/icons/insta-icon.ico" alt="Insta-logo" class="social-icon"></a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav pull-right">
        <li <?php if ($thisPage=="home") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>index.php" id="main-links"><span class="glyphicon glyphicon-home"></span>Home</a>
        </li>
        <li <?php if ($thisPage=="commercial") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>commercial/" id="main-links">Commercial</a>
        </li>
        <li <?php if ($thisPage=="resident") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>residential/" id="main-links">Residential</a>
        </li>
        <li <?php if ($thisPage=="features") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>features/" id="main-links">Water Features</a>
        </li>
        <li <?php if ($thisPage=="decks") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>decks/" id="main-links">Paver Decks</a>
        </li>
        <li <?php if ($thisPage=="spas") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>spas/" id="main-links">Spas</a>
        </li>
        <li <?php if ($thisPage=="infinity") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>infinity/" id="main-links">Infinity Edge</a>
        </li>
        <li <?php if ($thisPage=="contact") 
              echo " class=\"active\""; ?> >
          <a href="<?php echo BASE_URL; ?>contact/" id="main-links"><span class="glyphicon glyphicon-earphone"></span>Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>