<?php
/*
 Template name: About me
 */
?>

<!--

this content.php will be the backbone of all pages, except the frontpage. It will be dynamically altered with php so that the background color corresponds with the clicked section (about me = red, so content background
color should be set to red etc, and that it only shows posts that belong in the specified category (about me))
there should be a header, content and footer, but header and footer both get called in index.php an if statement
so here should be code for everything between header and footer
-->

<?php
get_header();
?>

<?php
// Include the page content template.
get_template_part( 'aboutme-content' );
?>

<?php
get_footer();
?>
