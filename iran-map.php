<?php

/*
Plugin Name:    Iran Map
Description:    Interactive Iran Map, admin can link each city to spicific link. 
Author:         Ali Taee
Author uri:     www.alitaee.xyz
Version:        0.1.0
License:        GPL2
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:    irmap
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
if( is_admin() ) {

    // include dependencies
    include_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
    include_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';

}
