<?php 
  function otogisa_setup() {
    add_filter('widget_text', 'do_shortcode');
    register_nav_menu('top-menu',__( 'Top Menu' ));
  }

  function otogisa_scripts() {
    wp_enqueue_style( 'otogisa-style', get_stylesheet_uri() );
    wp_enqueue_script( 'toggle-menu', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20170303', true );
    wp_enqueue_script('google-maps', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js', array(), '1.6.18', true);
    wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/slider.js', array('jquery'), '20170307', true );
  }

  if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
      array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image',
        'post_type' => 'post'
      )
    );
  }
	 

  add_theme_support( 'post-thumbnails' );
  add_action( 'wp_enqueue_scripts', 'otogisa_scripts' );
  add_action( 'after_setup_theme', 'otogisa_setup' );
?>