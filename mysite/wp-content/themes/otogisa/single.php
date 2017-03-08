<?php get_header(); ?>

<div id="main-content">
  <article class="post">
    <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();
    ?>
    
    <div class="news-thumb">
      <?php
        the_post_thumbnail();
      ?>
    </div>
    <?php
      the_title( '<h1 class="entry-title">', '</h1>' );
      the_content();
    ?>

    <?php endwhile; ?>
  </article>
</div>

<?php get_footer(); ?>