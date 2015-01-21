<!-- Single post -->

<?php get_header(); ?>
  <div id="content" role="main">
    <div id="mainText">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

          <h1><?php the_title() ?></h1>
            <?php if ( has_post_thumbnail() ) : ?>
            <div id="feature-image-single-page">
              <?php the_post_thumbnail(); ?>
            </div>

            <?php endif; ?>
	    <div class="post-content-single-page">
              <?php the_content(''); ?>
            </div><!-- end-post-content-single-page -->

            <p class="post-meta-single-page">Posted in - <?php the_category(',') ?> - on <?php the_time('F jS, Y'); ?></p>

        <?php endwhile; ?>

        <?php else : ?>
          <h2>nothing found</h2>
        <?php endif; ?>

    </div><!-- end maintext -->
  </div><!--end the content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
