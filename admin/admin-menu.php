<?php // top level - admin menu 



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// add top-level administrative menu
function iranmap_add_top_level_menu () {
    
    // add menu title, menu name, who can access, url, icon, order
    add_menu_page( 
        'Iran Map Settings',
        'Iran Map',
        'manage_options',
        'iran-map',
        'iranmap_display_settings_page',
        'dashicons-location-alt',
        null
    );

}
add_action( 'admin_menu', 'iranmap_add_top_level_menu' );