<?php /* Template Name: Daemons */ ?>

<?php get_header(); ?>

<div id="main-content">
  <header>Daemon Collection</header>
  <div class="daemon-list">
  <?php 

    $posts = get_posts(array(
      'posts_per_page' => -1,
      'post_type' => 'daemon',
      'meta_key' => 'scroll_number',
      'orderby' => 'meta_value_num',
      'order' => 'ASC'
    ));

    if($posts): 
      foreach( $posts as $post ):
        setup_postdata($post);
        if(get_field("scroll_number") !== NULL) {
    ?>
          <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"/><div class="caption divina"><?php the_field("scroll_number"); ?>: <?php the_title(); ?></div></a>
  <?php 
        }
      endforeach;
      wp_reset_postdata();
    endif;
  ?>      
  </div>
</div>

<?php get_footer(); ?>