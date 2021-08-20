<?php
/**
 * ZUPEE
 *
 * Please do not make any edits to this file. All edits should be done in a child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



function my_deregister_scripts(){
 wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


function add_theme_codes() {
wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true ); // Used for loading scripts

}

add_action( 'wp_enqueue_scripts', 'add_theme_codes' );


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

?>
