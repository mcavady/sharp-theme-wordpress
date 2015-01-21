<?php
/*
Template Name: Blog archive
*/
?>
<!-- Archive.php -->
<?php get_header(); ?>
<div id="content" role="main">
<h1>Archive</h1>
<div class="archive-post-container">      
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="archive-post-excerpt">
        <h2><?php the_title(); ?></h2>
          <div id="archive-post-feature-image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail(); ?>
                <?php endif; ?>
	  </div><!-- end archive-post-feature-image -->
          <div class="archive-post-excerpt-text">
            <?php the_content(''); ?>
          </div><!-- end archive-post-excerpt-text -->
          <div class="archive-post-meta">
            <p>Posted in -<?php the_category(',') ?>
               , On - <?php the_time('F jS, Y'); ?></p>
              <div class="read-more">
                <a href="<?php the_permalink(',') ?>"> Read more</a>
              </div>
          </div><!-- end post meta -->
      </div><!-- end archive-post-excerpt -->
    <?php endwhile; ?>
      <?php else : ?>
        <h2>nothing found</h2>
  <?php endif; ?>
</div><!-- end archive-post-container -->
</div><!--end the content-->
<?php get_sidebar(); ?>
<?php get_footer() ?>

