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

    <body>

        <div class="content-container-frontpage">

            <header id="header-wrapper-frontpage"></header>

                <div class="page-divider">

                    <article class="column hvr-fade-red">

                            <header class="title-page">

                              <figure class="icon-container">

                                  <figure id="about-me-icon"></figure>

                              </figure>

                                  <h3>About me</h3>

                            </header>

                        <div class="column-images column-float">

                            <a href="category/about-me/"><div class="invis-rectangle"></div><div id="rectangle-red"></div></a>

                                <div class="column-hover">

                                <!--<a href="aboutMe.html"><div id="rectangle-red"></div></a>-->

                                    <?php

                                        $catquery = new WP_Query( 'cat=2&posts_per_page=2' );

                                        while($catquery->have_posts()) : $catquery->the_post();

                                    ?>

                                    <?php if(has_post_thumbnail()): ?>
                                        <figure class="blog-thumbnail">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                                <?php the_post_thumbnail() ?>
                                            </a>
                                        </figure>

                                    <?php
                                        endif;
                                        endwhile;
                                    ?>

                                </div>

                        </div>

                    </article>

                    <article class="column hvr-fade-amber">

                          <header class="title-page">

                            <figure class="icon-container">

                                <figure id="two-dee-icon"></figure>

                            </figure>

                            <h3>Webdev</h3>

                            </header>

                        <div class="column-images column-float">

                            <div class="column-hover">

                                <a href="category/webdev/"><div class="invis-rectangle"></div><div id="rectangle-gold"></div></a>

                                    <?php

                                        $catquery = new WP_Query( 'cat=3&posts_per_page=2' );

                                        while($catquery->have_posts()) : $catquery->the_post();

                                    ?>

                                    <?php if(has_post_thumbnail()): ?>
                                        <figure class="blog-thumbnail">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                                <?php the_post_thumbnail() ?>
                                            </a>
                                        </figure>

                                    <?php
                                        endif;
                                        endwhile;
                                    ?>

                            </div>

                        </div>

                    </article>

                    <article class="column hvr-fade-purple">

                        <a href="2D_3D_art.html">

                            <header class="title-page">

                                <figure class="icon-container">

                                    <figure id="three-dee-icon"></figure>

                                </figure>

                                <h3>2D and 3D</h3>

                            </header>
                        </a>

                        <div class="column-images column-float">

                            <div class="column-hover">

                                <a href="category/2d-3d/"><div class="invis-rectangle"></div><div id="rectangle-purple"></div></a>

                                    <?php

                                        $catquery = new WP_Query( 'cat=4&posts_per_page=2' );

                                        while($catquery->have_posts()) : $catquery->the_post();

                                    ?>

                                    <?php if(has_post_thumbnail()): ?>
                                        <figure class="blog-thumbnail">
                                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                                <?php the_post_thumbnail() ?>
                                            </a>
                                        </figure>

                                    <?php
                                        endif;
                                        endwhile;
                                    ?>

                            </div>

                        </div>

                    </div>

                </div>

            </article>

    </body>

</html>
