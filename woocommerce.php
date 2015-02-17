<!-- woocommerce.php -->
<?php 

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sharp-theme-wordpress
 * @since sharp-theme-wordpress
 */

get_header(); ?>
  <div id="content" role="main">
<div class="default-page-container">
	<?php woocommerce_content(); ?>
</div><!-- end default-page-container -->
</div><!--end the content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

