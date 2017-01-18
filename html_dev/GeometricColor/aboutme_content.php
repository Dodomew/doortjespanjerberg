<!--
About-me-content
-->

<h1>About me content<h1>

  <?php

      $catquery = new WP_Query( 'cat=2&posts_per_page=2' );

      while($catquery->have_posts()) : $catquery->the_post();

  ?>
