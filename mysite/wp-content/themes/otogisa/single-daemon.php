<?php get_header(); ?>

<div id="main-content" class="daemon">
  <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();
  ?>
  <section class="photo">
      <?php the_post_thumbnail(); ?>
  </section>
  <section class="title">
    <h1><?php the_title(); ?></h1>
    <?php
      $image = get_field('star_rating');
      if(!empty($image)) : ?>
        <img class="stars" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endif; ?>
    <h2><?php echo the_field("quote"); ?></h2>
    <p class="description"><?php the_field("description"); ?></p>
  </section>
  <section class="details">
    <div class="profile">
      <header>Profile</header>
      <table class="profile-table">
        <tr>
          <td>Name:</td>
          <td><?php echo the_title(); ?></td>
        </tr>  
        <tr>
          <td>Type:</td>
          <td><?php echo the_field("type"); ?></td>
        </tr>
        <tr>
          <td>Class:</td>
          <td><?php echo the_field("class"); ?></td>
        </tr>
        <tr>
          <td>Rarity:</td>
          <td><?php echo the_field("rarity"); ?></td>
        </tr>
        <tr>
          <td>Artist:</td>
          <td><?php echo the_field("artist"); ?></td>
        </tr>
        <tr>
          <td>Voice Actor:</td>
          <td><?php echo the_field("voice_actor"); ?></td>
        </tr>
      </table>      
    </div>
    <div class="stats">
      <header>Stats</header>
      <table class="stats-table">
        <tr class="top-head">
          <td colspan="2">Min</td>
          <td>Max</td>
          <td>MLB</td>
        </tr>
        <tr>
          <td>Level</td>
          <td>1</td>
          <td>70</td>
          <td>90</td>
        </tr>
        <tr>
          <td class="caps">Atk</td>
          <td><?php echo the_field("min_atk"); ?></td>
          <td><?php echo the_field("max_atk"); ?></td>
          <td><?php echo the_field("mlb_atk"); ?></td>
        </tr>
        <tr>
          <td class="caps">Hp</td>
          <td><?php echo the_field("min_hp"); ?></td>
          <td><?php echo the_field("max_hp"); ?></td>
          <td><?php echo the_field("mlb_hp"); ?></td>
        </tr>
      </table>      
    </div>
    <div class="skills">
      <header>Skills &amp; Abilities</header>
      <table class="skills-table">
        <tr>
          <td>Skill:</td>
          <td class="skill-name"><?php the_field("skill"); ?></td>
        </tr>
        <tr>
          <td></td>
          <td><?php the_field("skill_description"); ?></td>
        </tr>
        <?php 
          $ability = get_field('ability_1');
          if(!empty($ability)) : ?>
            <tr>
              <td>Ability:</td>
              <td class="ability-name"><?php the_field("ability_1"); ?></td>
            </tr>
        <?php endif; ?>
        <tr>
          <td></td>
          <td><?php the_field("ability_1_description"); ?></td>
        </tr>
        <?php 
          $ability = get_field('ability_2');
          if(!empty($ability)) : ?>
            <tr>
              <td>Ability:</td>
              <td class="ability-name"><?php the_field("ability_2"); ?></td>
            </tr>
        <?php endif; ?>
        <tr>
          <td></td>
          <td><?php the_field("ability_2_description"); ?></td>
        </tr>
      </table>      
    </div>    
  </section>
  <section class="details row2">
    <div class="notes">
      <header>Notes</header>
      <p><?php the_content(); ?></p>
    </div>
    <div class="alternate">
      <header>Alternate Forms</header>
      <?php
        if(get_field("alternate_form_id") == true) {
          $postId = get_field("alternate_form_id");
          $postThumbURL = get_the_post_thumbnail_url($postId);
          $postURL = get_permalink($postId);
      ?>
      <div class="alt-container">
        <a href="<?php echo $postURL ?>"><img src="<?php echo $postThumbURL; ?>"></a>
        <p>[<?php echo get_field("alternate_form_name"); ?>]</p>
      </div>
      <?php
        } else {
          echo "<p>N/A</p>";
        }
      ?>
    </div>
    <div class="bonds">
      <header>Special Bonds</header>
      <?php 
        if(get_field("bond_partner_id") == true) {
          $postId = get_field("bond_partner_id");
          $postTitle = get_the_title("$postId");
          $postURL = get_permalink($postId);
      ?>  
      <table>      
        <tr>
          <td><a href="<?php echo $postURL; ?>"><?php echo $postTitle; ?></a></td>
        </tr>
        <tr>
          <td><?php echo get_field("bond_description"); ?></td>
        </tr>
      </table>
      <?php 
        } else {
          echo "<p>N/A</p>";
        }
      ?>
    </div>
  </section>
  <?php endwhile; 
    wp_reset_query();
  ?>
</div>

<?php get_footer(); ?>