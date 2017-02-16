<!DOCTYPE html>
<html>

    <head>

      <meta charset="utf-8">
      <title>Doortje Spanjerberg Portfolio</title>
      <meta name="description" content="Portfolio site of Doortje Spanjerberg, Front-End Developer">
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
      <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
      <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"   integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>-->
      <?php wp_head();?>

    </head>

    <body>

        <div class="content-container-frontpage">

            <a href="category/about-me/">

                  <article class="column hvr-fade-red">

                        <header class="title-page">

                          <figure class="title-page-rectangle rectangle-red"></figure>

                          <figure class="icon-container">

                            <figure class="mobile-thumbnail-container">

                              <?php

                                  $catquery = new WP_Query( 'cat=2&posts_per_page=1' );

                                  while($catquery->have_posts()) : $catquery->the_post();

                              ?>

                              <section class="column-thumbnail-container">

                                <?php if(has_post_thumbnail()): ?>

                                  <div class="column-thumbnail">

                                    <picture>

                                      <?php the_post_thumbnail() ?>

                                    </picture>

                                  </div>

                                  <?php endif; ?>

                               </section>

                              <?php

                                  endwhile;
                              ?>

                            </figure>

                          </figure>

                          <header class="frontpage-category-title">

                              <h3>About me</h3>

                          </header>

                      </header>

                      <div class="column-images column-float">

                              <div class="column-hover">

                                <div id="rectangle-red"></div>

                                  <?php

                                      $catquery = new WP_Query( 'cat=2&posts_per_page=2' );

                                      while($catquery->have_posts()) : $catquery->the_post();

                                  ?>

                                  <section class="column-thumbnail-container">

                                    <?php if(has_post_thumbnail()): ?>

                                      <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">

                                         <picture class="column-thumbnail">

                                           <?php the_post_thumbnail() ?>

                                           <figure class="image-overlay">

                                             <?php the_title(); ?>

                                           </figure>

                                         </picture>

                                       </a>

                                   </section>

                                  <?php
                                      endif;
                                      endwhile;
                                  ?>

                            </div>

                    </div>

              </article>

        </a>

        <a href="category/webdev/">

              <article class="column hvr-fade-green">

                      <header class="title-page">

                        <figure class="title-page-rectangle rectangle-green"></figure>

                        <figure class="icon-container">

                          <figure class="category-icon">

                          </figure>

                          <figure class="mobile-thumbnail-container">

                            <?php

                                $catquery = new WP_Query( 'cat=5&posts_per_page=1' );

                                while($catquery->have_posts()) : $catquery->the_post();

                            ?>

                            <section class="column-thumbnail-container">

                              <?php if(has_post_thumbnail()): ?>

                                <div class="column-thumbnail">

                                  <picture>

                                    <?php the_post_thumbnail() ?>

                                  </picture>

                                </div>

                                <?php endif; ?>

                             </section>

                            <?php

                                endwhile;
                            ?>

                          </figure>

                        </figure>

                        <header class="frontpage-category-title">

                            <h3>Webdev</h3>

                        </header>

                      </header>

                  <div class="column-images column-float">

                          <div class="column-hover">

                            <div id="rectangle-green"></div>

                          <!--<a href="aboutMe.html"><div id="rectangle-red"></div></a>-->

                              <?php

                                  $catquery = new WP_Query( 'cat=5&posts_per_page=2' );

                                  while($catquery->have_posts()) : $catquery->the_post();

                              ?>

                              <section class="column-thumbnail-container">

                                <?php if(has_post_thumbnail()): ?>

                                  <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">

                                     <picture class="column-thumbnail">

                                       <?php the_post_thumbnail() ?>

                                       <figure class="image-overlay">

                                         <?php the_title(); ?>

                                       </figure>

                                     </picture>

                                   </a>

                               </section>

                              <?php
                                  endif;
                                  endwhile;
                              ?>

                          </div>

                  </div>

              </article>

              </a>

              <a href="category/art-2d3d/">

                    <article class="column hvr-fade-blue">

                            <header class="title-page">

                              <figure class="title-page-rectangle rectangle-blue"></figure>

                              <figure class="icon-container">

                                <figure class="category-icon">


                                </figure>

                                <figure class="mobile-thumbnail-container">

                                  <?php

                                      $catquery = new WP_Query( 'cat=6&posts_per_page=1' );

                                      while($catquery->have_posts()) : $catquery->the_post();

                                  ?>

                                  <section class="column-thumbnail-container">

                                    <?php if(has_post_thumbnail()): ?>

                                      <div class="column-thumbnail">

                                        <picture>

                                          <?php the_post_thumbnail() ?>

                                        </picture>

                                      </div>

                                      <?php endif; ?>

                                   </section>

                                  <?php

                                      endwhile;
                                  ?>

                                </figure>

                              </figure>

                              <header class="frontpage-category-title">

                                  <h3>2D and 3D</h3>

                              </header>

                            </header>

                        <div class="column-images column-float">

                                <div class="column-hover">

                                  <div id="rectangle-blue"></div>

                                <!--<a href="aboutMe.html"><div id="rectangle-red"></div></a>-->

                                    <?php

                                        $catquery = new WP_Query( 'cat=6&posts_per_page=2' );

                                        while($catquery->have_posts()) : $catquery->the_post();

                                    ?>

                                    <section class="column-thumbnail-container">

                                      <?php if(has_post_thumbnail()): ?>

                                        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">

                                           <picture class="column-thumbnail">

                                             <?php the_post_thumbnail() ?>

                                             <figure class="image-overlay">

                                               <?php the_title(); ?>

                                             </figure>

                                           </picture>

                                         </a>

                                     </section>

                                    <?php
                                        endif;
                                        endwhile;
                                    ?>

                                </div>

                        </div>

                    </article>

                    </a>

            </div>

    </body>

</html>