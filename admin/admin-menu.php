<?php // top level - admin menu 



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// add top-level administrative menu
function iran_map_add_toplevel_menu() {

    /* 
		add_menu_page(
			string   $page_title, 
			string   $menu_title, 
			string   $capability, 
			string   $menu_slug, 
			callable $function = '', 
			string   $icon_url = '', 
			int      $position = null 
		)
	*/
	
	add_menu_page(
		'Iran Map Settings',
		'Iran Map',
		'manage_options',
		'iran-map',
		'iran_map_display_settings_page',
		'dashicons-location-alt',
		null
	);
	
}
add_action( 'admin_menu', 'iran_map_add_toplevel_menu' );

