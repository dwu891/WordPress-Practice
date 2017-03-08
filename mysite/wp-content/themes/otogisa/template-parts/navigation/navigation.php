<nav class="site-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'portfolio'); ?>">
  <div id="nav-icon">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
  <div class="search">
    <?php get_search_form(); ?>
  </div>
</nav>