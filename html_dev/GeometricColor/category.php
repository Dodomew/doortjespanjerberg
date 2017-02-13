<?php get_header(); ?>

	<main class="content-overview-posts">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

					get_template_part( 'content-overview', get_post_format() );

			endwhile;
			?>

	</main>

	<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
