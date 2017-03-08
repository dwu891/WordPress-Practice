<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'otogisa' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="Enter daemon, event, or skill name" value="<?php echo get_search_query(); ?>" name="s" />
  
    <button type="submit" class="search-submit"><img src="//10.0.0.230/mysite/wp-content/themes/otogisa/img/search.png"/><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'otogisa' ); ?></span></button>
</form>