<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/page/content-front-page-slider'); ?>
  <div id="main-content" class="front">
    <div class="left-sidebar">
      <?php get_template_part( 'template-parts/page/content-front-page-news'); ?>
      <section id="events">
        <header>Event Schedule</header>
        <ul class="event-list">
          <li class="event-subtitle">Current/Upcoming Events</li>
          <li><span class="date">03/07 - 03/14</span>Summon Rate UP For New Jewel Summons</li>
          <li><span class="date">03/08 - 03/10</span>Hishi Mochi Limited Time Dungeon</li>
          <li><span class="date">03/21 - 04/04</span>TBD Event</li>
        </ul>
        <ul class="event-list">
          <li class="event-subtitle">Permanent Events</li>
          <li><span class="date">15th day of month</span>Limit Break Orb Reset</li>
          <li><span class="date">11am - 1pm daily </span>Daily Free Jewel Summon</li>
          <li><span class="date">All Day Everyday </span>Minor, Medium, and Major Magatama Dungeons</li>
          <li><span class="date">All Day Everyday </span>Minor Medium, and Major Soulstone Dungeons</li>
        </ul>
      </section>
    </div>
    <div class="right-sidebar">
      <?php get_template_part( 'template-parts/page/content-front-page-dailies'); ?>
      <?php get_template_part( 'template-parts/page/content-front-page-summons'); ?>
      <?php get_template_part( 'template-parts/page/content-front-page-exchange'); ?>
    </div>
  </div>

<?php get_footer() ?>