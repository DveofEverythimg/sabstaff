<?php
/**
 * Jobify Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Jobify Child 1.0.0
 */


function jobify_child_styles() {
    wp_enqueue_style( 'jobify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jobify_child_styles', 20 );

/**
* Plugin Name: Jobify - Disable Default Google Fonts and Enqueue Custom
*/
function custom_jobify_fonts() {
wp_dequeue_style( 'jobify_fonts' );

wp_enqueue_style( 'jobify-custom-fonts', 'https://fonts.googleapis.com/css?family=Raleway:800,500' );
}
add_action( 'wp_enqueue_scripts', 'custom_jobify_fonts', 20 );