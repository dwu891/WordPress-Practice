<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/page/content-front-page-slider'); ?>
  <div id="main-content">
    <div class="left-sidebar">
      <?php get_template_part( 'template-parts/page/content-front-page-news'); ?>
      <?php get_template_part( 'template-parts/page/content-front-page-dailies'); ?>
    </div>
    <div class="right-sidebar">
      <?php get_template_part( 'template-parts/page/content-front-page-summons'); ?>
      <?php get_template_part( 'template-parts/page/content-front-page-exchange'); ?>
    </div>
  </div>

<?php get_footer() ?>