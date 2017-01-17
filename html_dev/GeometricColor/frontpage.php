<!DOCTYPE html>

<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage GeometricColor
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

        <div class="content-container-frontpage">

            <header id="header-wrapper-frontpage"></header>

                <div class="page-divider">

                    <article class="column hvr-fade-red">

                        <a href="<?php the_permalink() ?>">

                            <header class="title-page">

                              <figure class="icon-container">

                                  <figure id="about-me-icon"></figure>

                              </figure>

                                  <h3>About me</h3>

                            </header>

                        </a>

                        <div class="column-images column-float">

                            <a href="<?php echo get_page_link( get_page_by_title( 'About me' )->ID ); ?>"><div class="invis-rectangle"></div><div id="rectangle-red"></div></a>

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

                        <a href="webdev.html">

                          <header class="title-page">

                            <figure class="icon-container">

                                <figure id="two-dee-icon"></figure>

                            </figure>

                            <h3>Webdev</h3>

                            </header>

                          </a>

                        <div class="column-images column-float">

                            <div class="column-hover">

                                <a href="webdev.html"><div class="invis-rectangle"></div><div id="rectangle-gold"></div></a>

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

                                <a href="2D_3D_art.html"><div class="invis-rectangle"></div><div id="rectangle-purple"></div></a>

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

                    </article>

              </div>

        </div>

    </body>

</html>
