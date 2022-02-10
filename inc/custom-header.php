<?php
/**
 * @package Dropshipping Store
 * @subpackage dropshipping-store
 * @since dropshipping-store 1.0
 * Setup the WordPress core custom header feature.
 * @uses dropshipping_store_header_style()
*/

function dropshipping_store_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'dropshipping_store_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'dropshipping_store_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'dropshipping_store_custom_header_setup' );

if ( ! function_exists( 'dropshipping_store_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'dropshipping_store_header_style' );
function dropshipping_store_header_style() {
	if ( get_header_image() ) :
	$dropshipping_store_custom_css = "
        .middle-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'dropshipping-store-basic-style', $dropshipping_store_custom_css );
	endif;
}
endif;