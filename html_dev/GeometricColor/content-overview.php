<div class="blog-post">

		<!--<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"></a></h2>-->

	 <?php if(has_post_thumbnail()): ?>

		 <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">

				<figure class="blog-thumbnail">

					<?php the_post_thumbnail() ?>

					<figure class="image-overlay">

						<?php the_title(); ?>

					</figure>

				</figure>

			</a>

		<?php endif ?>

</div><!-- /.blog-post -->
