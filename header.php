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





    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Embrace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
            wp_nav_menu( array(
              
              'theme_location' => 'top_menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'navbar-nav ml-auto',
              'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
              // Process nav menu using our custom nav walker.
              'walker'         => new WP_Bootstrap_Navwalker(),
              
            ) );
          ?>
        </div>
      </div>
    </nav>














	<!-- HEADER
  ============================================== -->
  <!--<div id="main_navbar" class="navbar navbar-expand_md bg-dark">

    <div class="container">

      <a class="navbar-brand text-white" href="#">Embrace</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="true" arial-label="<?php esc_attr_e( 'Toggle navigation', 'best-reloaded' ); ?>">
          <span class="fa fa-navicon"></span>
          <span class="sr-only"><?php esc_html_e( 'Toggle Navigation', 'top_menu' ); ?></span>
      </button>-->

      <!--<nav class="" id="headerNav" role="navigation" aria-label="Top Menu">
        <span class="sr-only"><?php esc_html_e( 'Top Menu', 'top_menu' ); ?></span>

          <?php
            wp_nav_menu( array(
              
              'theme_location' => 'top_menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'navbar-nav mr-auto',
              'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
              // Process nav menu using our custom nav walker.
              'walker'         => new WP_Bootstrap_Navwalker(),
              
            ) );
          ?>

      </nav>

    </div>
  </div>-->






    

</div><!-- /page-->