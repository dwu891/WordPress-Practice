<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="main-content">

	<div class="search-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="search-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
		<?php endif; ?>
	</div><!-- .page-header -->

    <div class="search-results">
      <?php
      $query = get_search_query();
      $qlen = strlen($query);
      if ( have_posts() && $query !== "" && $qlen > 2) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();

              /**
               * Run the loop for the search to output the results.
               * If you want to overload this in a child theme then include a file
               * called content-search.php and that will be used instead.
               */
              get_template_part( 'template-parts/post/content', 'post-search' );

          endwhile; // End of the loop.
      ?>
        <div class="search-nav">
      <?php
          the_posts_pagination( array(
              'prev_text' => "<" . '<span class="screen-reader-text">' . __( 'Previous page', 'otogisa' ) . '</span>',
              'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'otogisa' ) . '</span>' . ">",
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'otogisa' ) . ' </span>',
          ) );
      ?>
        </div>
      <?php
      else : ?>

          <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
          <?php

      endif;
      ?>
    </div>
</div>

<?php get_footer();
