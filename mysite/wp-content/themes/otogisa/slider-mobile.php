  <section id="slider">
    <ul class="slides">
      <?php 
        query_posts('cat=5&showposts=3');
        $count = 1;
        while ( have_posts() ) : the_post(); 
      ?>
        <input type="radio" name="radio-btn" id="img-<?php echo $count ?>" checked />
        <li class="slide-container">
          <div class="slide">
            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/></a>
          </div>
          <div class="nav-btns">
            <label for="img-<?php if($count == 1) { echo "3";} else { echo $count-1; } ?>" class="prev">&#x2039;</label>
            <label for="img-<?php if($count == 3) { echo "1";} else { echo $count+1; } ?>" class="next">&#x203a;</label>
          </div>
        </li>
        <?php $count++; ?>
      <?php  endwhile; ?>
      
      <li class="nav-dots">
      <?php 
        query_posts('cat=5&showposts=3');
        $count = 1;
        while ( have_posts() ) : the_post(); 
      ?>      
        <label for="img-<?php echo $count; ?>" class="nav-dot" id="img-dot-<?php echo $count; ?>"></label>
        <?php $count++; ?>
      <?php endwhile; ?>
      </li>
    </ul>
  </section>