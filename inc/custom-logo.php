<?php
/**
 * Sample implementation of the Custom Logo feature.
 *
 * You can add an optional custom logo image to header.php like so ...
 *
	kaneohe_custom_logo()
 *
 *
 * @package Kaneohe
 */

/**
 * Set up the WordPress core custom logo feature.
 */
function kaneohe_custom_logo_setup() {
	add_theme_support( 'custom-logo', apply_filters( 'kaneohe_custom_logo_args', array(
		'height'          => 100,
		'width'           => 400,
		'flex-height'     => true,
		'flex-width'      => true,
		'header-text'     => array( 'site-title', 'site-description' ),
	) ) );
}
add_action( 'after_setup_theme', 'kaneohe_custom_logo_setup' );

if ( ! function_exists( 'kaneohe_custom_logo' ) ) :

function kaneohe_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}

endif;
