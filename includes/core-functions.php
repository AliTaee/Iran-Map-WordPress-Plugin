<?php // core functionality



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// custom color scheme iran map
function iran_map_custom_scheme() {
	
	$iran_map_scheme = 'default';
	
	$iran_map_options = get_option( 'iran_map_options', iran_map_options_default() );
	
	if ( isset( $iran_map_options['custom_color'] ) && ! empty( $iran_map_options['custom_color'] ) ) {
		
		$iran_map_scheme = sanitize_text_field( $iran_map_options['custom_color'] );
		
	}

	switch ( $iran_map_scheme ) {

		case 'green':
			wp_enqueue_style( 'iran-map', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/green.css', array(), null, 'screen' );
			break;

		case 'full':
			wp_enqueue_style( 'iran-map', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/full.css', array(), null, 'screen' );
			break;

		case 'black':
			wp_enqueue_style( 'iran-map', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/black.css', array(), null, 'screen' );
			break;

		case 'blue':
			wp_enqueue_style( 'iran-map', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/blue.css', array(), null, 'screen' );
			break;

		case 'cyan':
			wp_enqueue_style( 'iran-map', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/cyan.css', array(), null, 'screen' );
			break;

		default:
			
	}
	
}
add_action( 'init', 'iran_map_custom_scheme' );