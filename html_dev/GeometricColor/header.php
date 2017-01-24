<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title>Doortje Spanjerberg Portfolio</title>
        <meta name="description" content="Portfolio site of Doortje Spanjerberg, Front-End Developer">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"   integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
        <?php wp_head();?>

    </head>

    <body class="content-overview-<?php print (get_the_category()[0]->slug)  ?>">

      <header class="content-header">

        <section class="content-header-container">

          <section class="content-header-left">

            <h1><?php single_cat_title(); ?></h1>

          </section>

          <section class="content-header-right">

            <figure> <!-- Circle, triangle and square logo icon -->

              <img src="<?php bloginfo('template_directory');?>/images/icons/spanjerberg_portfolio_icon_logo_circleSquareTriangle.svg" alt="Circle, triangle and square logo">

            </figure>

          </section>

        </section>

      </header>

      <main class="sidebar-and-posts-container">
