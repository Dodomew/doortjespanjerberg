<aside class="sidebar-container">

  <section class=sidebar-content-container>

    <p>

      <?php
        $category = get_the_category();
        echo category_description($category[0]->cat_ID);
      ?>


    <p/>

  </section>

  <section class="sidebar-content-social-container">

    <figure>

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/facebook_logo_white.svg" alt="facebook white logo">

    </figure>

    <figure>

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/github_logo_white.svg" alt="github white logo">

    </figure>

    <figure>

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/instagram_logo_white.svg" alt="instagram white logo">

    </figure>

    <figure>

      <img src="<?php bloginfo('template_directory');?>/images/icons/socialIcons/mail_logo_white.svg" alt="mail white logo">

    </figure>

  </section>

</aside>
