<?php // top level - admin menu 



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// add top-level administrative menu ,
function iran_map_add_toplevel_menu() {
	
	add_menu_page(
		__( 'Iran Map', 'iran-map' ),
		__( 'Iran Map', 'iran-map' ),
		'manage_options',
		'iran-map',
		'iran_map_display_settings_page',
		'dashicons-location-alt',
		null
	);
	
}
add_action( 'admin_menu', 'iran_map_add_toplevel_menu' );