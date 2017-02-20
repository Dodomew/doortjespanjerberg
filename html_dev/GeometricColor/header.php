<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title>Doortje Spanjerberg Portfolio</title>
        <meta name="description" content="Portfolio site of Doortje Spanjerberg, Front-End Developer">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" /> <!-- width=device-width takes pixel density into account, so a device with true resolution of 640px width and 2.0 pixel density will have a browser viewport width of 320px http://stackoverflow.com/questions/19933143/css-media-queries-pixel-density-desktop-and-mobile-devices -->
        <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"   integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
        <?php wp_head();?>

    </head>

    <body class="content-overview <?php print (get_the_category()[0]->slug)  ?>">

      <header class="content-header">

        <section class="content-header-container">

          <section class="content-header-left">

            <?php

              $current_category = single_cat_title("", false);

              if($current_category != "")
              {
                echo "<h1>" . $current_category . "</h1>";
              }
              else
              {
                ?><h1><?php single_post_title(); ?></h1>
                <?php
              }
            ?>

          </section>

          <section class="content-header-right">

            <a href="<?php echo get_home_url(); ?>">

              <figure> <!-- Logo -->

                <img src="<?php bloginfo('template_directory');?>/images/icons/DoortjeSpanjerberg_Logo.svg" alt="Circular icon with two abstract cats">

              </figure>

            </a>

          </section>

        </section>

      </header>

      <main class="sidebar-and-posts-container">
