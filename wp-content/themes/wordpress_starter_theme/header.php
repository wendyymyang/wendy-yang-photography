<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ****** faviconit.com favicons ****** -->
  <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
  <link rel="icon" sizes="16x16 32x32 64x64" href="<?php bloginfo('template_url') ?>/favicon.ico">
  <link rel="icon" type="image/png" sizes="196x196" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-160.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-96.png">
  <link rel="icon" type="image/png" sizes="64x64" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-16.png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/images/favicons/favicon-180.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url') ?>/images/favicons/favicon-144.png">
  <meta name="msapplication-config" content="<?php bloginfo('template_url') ?>/images/favicons/browserconfig.xml">
  <!-- ****** faviconit.com favicons ****** -->

  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|PT+Serif:400,700" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="loader">
  <img src="<?php bloginfo('template_url') ?>/images/balls.gif" alt="Gif for loading the page">
</div>

<header>
  <div class="wrapper">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <h4>
      <?php bloginfo('description'); ?>
    </h4>
  </div> <!-- /.wrapper -->
</header><!--/.header-->

<nav class="top-nav">
  <div class="wrapper">
  
    <div class="main-menu">
      <?php wp_nav_menu( array(
        'wrapper' => false,
        'theme_location' => 'primary'
      )); ?>
    </div>
    
    <div class="social-menu">
      <?php wp_nav_menu( array(
        'wrapper' => false,
        'theme_location' => 'social'
      )); ?>
    </div>

    <div class="nav-search">
      <label for="s">Search Form</label>
      <?php get_search_form(); ?>
    </div>

  </div> <!-- wrapper ends -->
</nav> <!-- top-nav ends -->
