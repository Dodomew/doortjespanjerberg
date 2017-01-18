<?php

    if(!is_front_page())
    {
        get_header();
    }

?>

    <?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post();

    if  ( is_front_page() ) 
    { 
        get_template_part( 'frontpage' );
    }
    else 
    {
        get_template_part( 'content' );
    }

    endwhile;

    ?>

    <?php
        endif; 
    ?>  

<?php

    if(!is_front_page())
    {
        get_footer();
    }

?>
