<?php

/*
Plugin Name:    Iran Map
Description:    Interactive Iran Map, admin can link each city to spicific link. 
Author:         Ali Taee
Author uri:     www.alitaee.xyz
Version:        1.0.0
License:        GPL2
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:    iran-map
Domain Path:    /languages
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// if admin area
if ( is_admin() ) {

    // include dependencies in admin area
    include_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
    include_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
    include_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
    include_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
    include_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';
    
}


// include dependencies in public area
include_once plugin_dir_path( __FILE__ ) . 'public/display-map.php';


// include dependencies in public and admin area
include_once plugin_dir_path( __FILE__ ) . 'core/core-functions.php';




// load text domain
function iran_map_load_textdomain() {
	
	load_plugin_textdomain( 'iran-map', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	
}
add_action( 'plugins_loaded', 'iran_map_load_textdomain' );




// remove options on uninstall
function iran_map_on_uninstall() {

	if ( ! current_user_can( 'activate_plugins' ) ) return;

	delete_option( 'iran_map_options' );

}
register_uninstall_hook( __FILE__, 'iran_map_on_uninstall' );




// default plugin options
function iran_map_options_default() {

	return array(
        'custom_color'                      => 'default',
        'link_isfahan'                      => 'https://www.example.com/',
        'link_tehran'                       => 'https://www.example.com/',
        'link_fars'                         => 'https://www.example.com/',
        'link_mashhad'                      => 'https://www.example.com/',
        'link_yazd'                         => 'https://www.example.com/',
        'link_semnan'                       => 'https://www.example.com/',
        'link_kerman'                       => 'https://www.example.com/',
        'link_khuzestan'                    => 'https://www.example.com/',
        'link_khorasan_shomali'             => 'https://www.example.com/',
        'link_khorasan_jonobi'              => 'https://www.example.com/',
        'link_sistan_baluchistan'           => 'https://www.example.com/',
        'link_hormozgan'                    => 'https://www.example.com/',
        'link_bushehr'                      => 'https://www.example.com/',
        'link_ilam'                         => 'https://www.example.com/',
        'link_kermanshah'                   => 'https://www.example.com/',
        'link_kurdestan'                    => 'https://www.example.com/',
        'link_qom'                          => 'https://www.example.com/',
        'link_markazi'                      => 'https://www.example.com/',
        'link_qazvin'                       => 'https://www.example.com/',
        'link_west_azarbayijan'             => 'https://www.example.com/',
        'link_east_azarbayijan'             => 'https://www.example.com/',
        'link_ardebil'                      => 'https://www.example.com/',
        'link_lorestan'                     => 'https://www.example.com/',
        'link_gilan'                        => 'https://www.example.com/',
        'link_mazandaran'                   => 'https://www.example.com/',
        'link_golestan'                     => 'https://www.example.com/',
        'link_hamedan'                      => 'https://www.example.com/',
        'link_zanjan'                       => 'https://www.example.com/',
        'link_chahar_mahale_bakhtiyari'     => 'https://www.example.com/',
        'link_kohgiloye_va_boyer_ahmad'     => 'https://www.example.com/',
        'link_karaj'                        => 'https://www.example.com/',
	);

}
