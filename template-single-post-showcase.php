<?php
/*
Template Name: Single post show case
*/
?>

<!-- page.php -->
<?php get_header(); ?>
  <div id="content" role="main">
<h1><?php bloginfo('name'); ?></h1>
<div class="page-container">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="single-page">
        <h2><?php the_title(); ?></h2>
          <div id="page-feature-image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail(); ?>
                <?php endif; ?>
	  </div><!-- end page-feature-image -->
          <div class="single-page-content">
            <?php the_content(''); ?>
          </div><!-- end single-page-content -->
      </div><!-- end single-page -->
    <?php endwhile; ?>
      <?php else : ?>
        <h2>nothing found</h2>
  <?php endif; ?>
</div><!-- end page-container -->
<div class="">
  <?php dynamic_sidebar( 'gallery-main-page' ); ?>
</div>

</div><!--end the content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

