  <aside class="content-aside-container">

    <h1>Text about projects and stuff.</h1>

  </aside>

  <main class="content-main-container">

    <h1>Here are the projects themselves.</h1>

    <?php
     $catPost = get_posts(get_cat_ID("About me"));
       foreach ($catPost as $post) : setup_postdata($post); ?>

           <header>
                 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                 <?php if(has_post_thumbnail()): ?>
                      <figure class="blog-thumbnail">
                          <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                              <?php the_post_thumbnail() ?>
                          </a>
                      </figure>

                  <?php endif ?>

                 <p><?php the_content(); ?></p>

           </header>

    <?php endforeach;?>

  </main>

</div>
