<?php get_header(); ?>

<div class="content-overview-<?php print (get_the_category()[0]->slug)  ?>">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

				get_template_part( 'content-overview', get_post_format() );

		endwhile;
		?>
</div>
<?php

get_footer();
