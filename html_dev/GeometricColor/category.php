	<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<main class="content-overview-posts">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

					get_template_part( 'content-overview', get_post_format() );

			endwhile;
			?>

	</main>

</main>

	<?php get_footer(); ?>

</div>
