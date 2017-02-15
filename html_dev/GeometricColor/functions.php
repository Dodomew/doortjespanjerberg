<?php

    // Add scripts and stylesheets

    function startwordpress_scripts()
    {
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

    // Load external file to add support for MultiPostThumbnails. Allows you to set more than one "feature image" per post.
    //require_once('library/multi-post-thumbnails.php');

    // Add Google Fonts
    function startwordpress_google_fonts()
    {
        //wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
        //wp_enqueue_style( 'OpenSans');

        wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700');
        wp_enqueue_style( 'Lato');
    }

    add_action('wp_print_styles', 'startwordpress_google_fonts');

    // WordPress Titles
    add_theme_support( 'title-tag' );

    // Support Featured Images
    add_theme_support( 'post-thumbnails' );
    //Note: 'true' enables hard cropping so each image is exactly those dimensions and automatically cropped
    /*add_image_size( 'feature-image', 960, 540, true );
    add_image_size( 'largethumb', 640, 360 , true );
    add_image_size( 'medium-thumb', 480, 320, true );
    add_image_size( 'small-thumb', 320, 240, true );
    */
    add_image_size( 'medium-thumb', 512, 256, true );
    
    //set x number of posts per page
    function set_posts_per_page( $query ) {
      if ( !is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
      }
    }
    add_action( 'pre_get_posts', 'set_posts_per_page');

    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

    /*function body_class( $class = '' ) {
        // Separates classes with a single space, collates classes for body element
        echo 'class="' . join( ' ', get_body_class( $class ) ) . '"';
    }*/

?>
