
<?php

/*
This is clean up file for functions in wordpress
*/

// //remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// // Remove rss feed links
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

// // remove wp-embed
add_action( 'wp_footer', function(){
    wp_dequeue_script( 'wp-embed' );
});


add_action( 'wp_enqueue_scripts', function(){
    // // remove block library css
    wp_dequeue_style( 'wp-block-library' );
    // // remove comment reply JS
    wp_dequeue_script( 'comment-reply' );
} );


// for wp-config.php
// define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
// define('WP_POST_REVISIONS', false);
// define('WP_POST_REVISIONS', 5);