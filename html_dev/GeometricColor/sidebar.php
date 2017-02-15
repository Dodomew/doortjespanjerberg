<aside class="sidebar-container">

  <section class=sidebar-content-container>

    <?php

      $the_cat = get_the_category();

      $category_name = $the_cat[0]->cat_name;

      $category_link = get_category_link( $the_cat[0]->cat_ID );

      //https://wisdmlabs.com/blog/create-link-current-category-wordpress/

    ?>

    <a href="<?php echo esc_url( $category_link ); ?>"
      <p>

        <?php

          $category = get_the_category();

          echo category_description($category[0]->cat_ID);

        ?>

      </p>
    </a>

  </section>

  <section class="sidebar-content-social-container">

    <figure class="image-hover-scale-up">

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/facebook_logo_white.svg" alt="facebook white logo">

    </figure>

    <figure class="image-hover-scale-up">

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/github_logo_white.svg" alt="github white logo">

    </figure>

    <figure class="image-hover-scale-up">

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/instagram_logo_white.svg" alt="instagram white logo">

    </figure>

    <figure class="image-hover-scale-up">

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/mail_logo_white.svg" alt="mail white logo">

    </figure>

  </section>

</aside>
