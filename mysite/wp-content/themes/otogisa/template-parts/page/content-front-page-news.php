      <section class="news">
        <header>News &amp; Discussion</header>
        <ul class="news-list">
          <?php
            query_posts('cat=6&showposts=8');
            while ( have_posts() ) : the_post(); 
          ?>
          <li><span class="date"><?php the_time('m/d h:ia'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>
      </section>