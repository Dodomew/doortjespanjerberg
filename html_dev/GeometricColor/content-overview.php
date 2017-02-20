<div class="blog-post">

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
