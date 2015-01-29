<!-- page.php -->
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
<h1><?php bloginfo('name'); ?></h1>
<div class="default-page-container">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="default-page">
        <h2><?php the_title(); ?></h2>
          <div id="default-page-feature-image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail(); ?>
                <?php endif; ?>
	  </div><!-- end default-page-feature-image -->
          <div class="default-page-content">
            <?php the_content(''); ?>
          </div><!-- end default-page-excerpt-text -->
      </div><!-- end archive-post-excerpt -->
    <?php endwhile; ?>
      <?php else : ?>
        <h2>nothing found</h2>
  <?php endif; ?>
</div><!-- end default-page-container -->
</div><!--end the content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

