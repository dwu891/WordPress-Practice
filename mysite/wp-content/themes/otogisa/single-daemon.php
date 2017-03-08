<?php get_header(); ?>

<div id="main-content" class="daemon">
  <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();
  ?>
  <section class="photo">
    <?php the_post_thumbnail(); ?>
  </section>
  <section class="stats">
    <h1><?php the_title(); ?></h1>
    
  </section>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>