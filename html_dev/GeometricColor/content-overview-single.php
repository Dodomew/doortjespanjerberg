<div class="blog-post">

		<!--<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->

	 <?php if(has_post_thumbnail()): ?>
				<figure class="blog-thumbnail">
						<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
								<?php the_post_thumbnail() ?>
						</a>
				</figure>

		<?php endif ?>

	<!--<?php the_excerpt(); ?>-->

</div><!-- /.blog-post -->
