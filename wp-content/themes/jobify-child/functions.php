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
* Disable Default Google Fonts and Enqueue Custom
*/
function custom_jobify_fonts() {
wp_dequeue_style( 'jobify_fonts' );

wp_enqueue_style( 'jobify-custom-fonts', 'https://fonts.googleapis.com/css?family=Raleway:800,500' );
}
add_action( 'wp_enqueue_scripts', 'custom_jobify_fonts', 20 );


/**
* Change City / Town to just City on Checkout form
*/
add_filter( 'woocommerce_default_address_fields', 'my_default_address_fields' ); 

function my_default_address_fields( $fields ) { $fields['city']['label'] = 'City'; $fields['city']['placeholder'] = 'City'; return $fields; }


/**
* Changes on Job Listing Form
*/
add_filter( 'submit_job_form_fields', 'custom_submit_job_form_fields' );

function custom_submit_job_form_fields( $fields ) { $fields['job']['application']['label'] = 'Send Application To This Email Address or Application URL'; $fields['job']['application']['placeholder'] = 'Email address or URL where application is to be sent'; $fields['job']['job_location']['label'] = 'Address of Job Location'; $fields['job']['job_location']['placeholder'] = 'Complete address of where the job is located';     $fields['job']['job_location']['required'] = true; $fields['job']['job_location']['description'] = ''; return $fields; }