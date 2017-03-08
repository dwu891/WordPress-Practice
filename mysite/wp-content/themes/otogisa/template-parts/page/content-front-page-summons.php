<section class="summons">
  <header>New Jewel Summons</header>
  <div class="img-list">
    <?php
        query_posts(array(
          'post_type' => daemon,
          'cat' => 9
        ));
      while (have_posts()) : the_post();
    ?>
    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/></a>
    <?php endwhile; ?>
  </div>
</section>