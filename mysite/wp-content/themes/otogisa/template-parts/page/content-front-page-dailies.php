<header>Today's Daily Dungeon Schedule</header>    
  <div class="daily">
    <section id="gosanke" class="subsection">
      <h2>Gosanke</h2>
      <p>11:00am - 1:00pm</p>
      <?php 
        date_default_timezone_set('America/Los_Angeles');
        switch(date("w")) {
          case 0:
            echo "<img class=\"tri\" src=\"wp-content/themes/otogisa/img/Gosanke.png\" alt=\"Tri Color\"/><h3>Gosanke</h3>";
            break;
          case 1:
          case 4:
            echo "<img src=\"wp-content/themes/otogisa/img/Okita_Soji.png\" alt=\"Okita Soji\"/><h3>Okita Soji</h3>";
            break;
          case 2:
          case 5: 
            echo "<img src=\"wp-content/themes/otogisa/img/Ibaraki_Doji.png\" alt=\"Ibaraki Doji\"/><h3>Ibaraki Doji</h3>";
            break;
          case 3:
          case 6:
            echo "<img src=\"wp-content/themes/otogisa/img/Muramasa.png\" alt=\"Muramasa\"/><h3>Muramasa</h3>";
            break;
        }
      ?>
    </section>
    <section id="exp" class="subsection">
      <h2>Experience</h2>
      <p>5:00pm - 6:00pm</p>
      <?php 
        query_posts(array(
          'post_type' => daemon,
          'cat' => 8,
          'showposts' => 1
        ));
        while ( have_posts() ) : the_post(); 
      ?>
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
        <h3><?php the_title(); ?></h3>
      <?php endwhile; ?>
    </section>
    <section id="boss-arise" class="subsection">
      <h2>Boss Arise</h2>
      <p>7:00am - 9:00am</p>
      <?php 
        date_default_timezone_set('America/Los_Angeles');
        switch(date("w")) {
          case 0:
            echo "<img src=\"wp-content/themes/otogisa/img/Dojigiri_Yasutsuna.png\" alt=\"Dojigiri Yasutsuna\"/><h3>Dojigiri Yasutsuna</h3>";
            break;
          case 1:
            echo "<img src=\"wp-content/themes/otogisa/img/Restless_Ghost.png\" alt=\"Restless Ghost\"/><h3>Restless Ghost</h3>";
            break;
          case 2:
            echo "<img src=\"wp-content/themes/otogisa/img/Tokarev_Pistol.png\" alt=\"Tokarev Pistol\"/><h3>Tokarev Pistol</h3>";
            break;
          case 3:
            echo "<img src=\"wp-content/themes/otogisa/img/Commodore_Perry.png\" alt=\"Commodore Perry\"/><h3>Commodore Perry</h3>";
            break;
          case 4:
            echo "<img src=\"wp-content/themes/otogisa/img/Titania.png\" alt=\"Titania\"/><h3>Titania</h3>";
            break;
          case 5:
            echo "<img src=\"wp-content/themes/otogisa/img/Poison_S._Brew.png\" alt=\"Poison S. Brew\"/><h3>Poison S. Brew</h3>";
            break;
          case 6:
            echo "<img src=\"wp-content/themes/otogisa/img/Kintaro.png\" alt=\"Kintaro\"/><h3>Kintaro</h3>";
            break;
        }
      ?>
    </section>
  </div>