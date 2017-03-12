<section class="exchange">
  <header>Current Exchange Daemons</header>
  <div class="img-list">
    <?php
      query_posts(array(
        'post_type' => daemon,
        'cat' => 10
      ));
      while (have_posts()) : the_post();
    ?>
    <div class="img-container">
      <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/></a>
      <?php 
      $output = do_shortcode("[postexpirator]");
        if($output !== '') { ?>
          <p>Ends <?php echo do_shortcode("[postexpirator dateformat=\"m/d\"]"); ?></p>
        <?php } else { ?>
          <p>Resets on 15th of month</p>
        <?php } ?>
    </div>
    <?php endwhile; ?>
  </div>
</section>