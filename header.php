<!-- header -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Sharp theme"/>
    <meta name="keywords" content="HTML5,CSS,James, Mcavady, Home, Responsive, frame"/>
    <meta name="author" content="James Mcavady 2014 - HTML5 responsive sharp theme"/>
    <meta name="viewport" content="width=device-width"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,300,500,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css"/><!--reset the css for better browser compatibility -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/><!--The main style of the pages-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( $class ); ?>>
  <div id="very-top"></div>
  <div id="aria"><!-- access for visually impaired -->
    <a href="#container" title="Go to the home page content.">Skip to the home page content</a>
    <a href="#access" title="Go to the site navigation.">Skip to the navigation</a>
  </div><!-- end aria -->
    <div id="top">
      <div id="logo" role="banner">
        <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
      </div><!-- end the logo -->  <?php get_search_form( $echo ); ?> 
      <div id="access">
        <nav role="navigation"><!-- HTML 5 nav -->
            <?php wp_nav_menu(); ?>
	    
        </nav><!--end the nav -->
      </div><!-- end the access-->
    </div><!--end top-->
  <div id="container">
