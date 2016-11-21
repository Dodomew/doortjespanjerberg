<div class="content-container-frontpage">
        
        <div id="header-wrapper-frontpage"></div>

            <div class="page-divider">

                <div class="column hvr-fade-red">

                    <a href="aboutMe.html">
                        
                        <div class="title-page">
                        
                        <div class="icon-container">
                            <div id="about-me-icon"></div>
                        </div>
                            <p>About me</p>
                        
                        </div>
                        
                    </a>

                    <div class="column-images column-float">

                        <a href="aboutMe.html"><div class="invis-rectangle"></div></a>
                        
                            <div class="column-hover">
                                
                                <a href="aboutMe.html"><div id="rectangle-red"></div></a>
                                
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

                                <?php endif ?>
                                
                            </div>
                        
                    </div>

                </div>

                <div class="column hvr-fade-amber">

                    <a href="2D_art.html"><div class="title-page">
                        
                        <div class="icon-container">
                            <div id="two-dee-icon"></div>
                        </div>
                            
                            <p>Photoshop, painting, video-editing, photography</p></div></a>

                    <div class="column-images column-float">
                        
                        <div class="column-hover">

                            <a href="2D_art.html"><div class="invis-rectangle"></div><div id="rectangle-gold"></div></a>
                            
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
                            
                            <?php endif ?>

                        </div>

                    </div>

                </div>

                <div class="column hvr-fade-purple">

                    <a href="3D_art.html">
                        <div class="title-page">
                        
                            <div class="icon-container">
                                <div id="three-dee-icon"></div>
                            </div>
                            
                            <p>Maya, Mudbox, Unity3D</p>
                            
                        </div>
                    </a>

                    <div class="column-images column-float">

                        <div class="column-hover">
                        
                            <a href="3D_art.html"><div class="invis-rectangle"></div><div id="rectangle-purple"></div></a>
                    
                                <?php if(has_post_thumbnail()): ?>
                                    <figure class="blog-thumbnail">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                            <?php the_post_thumbnail() ?>
                                        </a> 
                                    </figure>

                                <?php endif ?>
                            
                        </div>

                    </div>

                </div>

                <div class="column hvr-fade-green">

                    <a href="webdesign.html">
                        <div class="title-page">
                            
                            <div class="icon-container">
                                
                                <div id="webdesign-icon"></div>
                                
                            </div>
                            
                            <p>Web design</p>
                            
                        </div>
                    </a>

                    <div class="column-images column-float">
                        
                        <div class="column-hover">

                            <a href="webdesign.html"><div class="invis-rectangle"></div><div id="rectangle-green"></div></a>

                                <?php if(has_post_thumbnail()): ?>
                                    <figure class="blog-thumbnail">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                            <?php the_post_thumbnail() ?>
                                        </a> 
                                    </figure>

                                <?php endif ?>
                        </div>

                    </div>

                </div>

            </div>