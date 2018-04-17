<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Embrace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.jpg">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/123bc09ff9.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'embrace' ); ?></a>



	<!-- HEADER
  ============================================== -->
  <nav class="navbar navbar-expand-lg text-light container fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="http://a5ebb47b.ngrok.io/">Embrace</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

    <!-- I the menu (WP admin area) is not set, then the "menu-class" is applied to "container," overwriting the "container_class". -->

          <?php
            wp_nav_menu( array(
              
              'theme_location'  => 'primary',
              'container'     => 'nav',
              'container_class' => 'navbar-collapse collapse',
              'menu_class'    => 'nav navbar-nav ml-auto\\'
              
            ) );
          ?>


    <!--<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link btn btn-outline-light" href="#">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link btn btn-outline-light" href="#">Events</a>
      </li>
       <li class="nav-item">
        <a class="nav-link btn btn-outline-light" href="#">Speakers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-outline-light" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-outline-light px-3" href="http://meghansmith.local/blog/">Blog</a>
      </li>
    </ul>-->
  </div>
</nav>






    


    </div>