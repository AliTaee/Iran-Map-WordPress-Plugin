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

function iranmap_display_settings_page ( ) {

    // check if user allowed access
    if ( ! current_user_can ( 'manage_options' ) ) return;

    ?>

    <div class="wrap">
        <h1> <?php echo esc_html( get_admin_page_title ( ) ); // display plugin name as page title ?> </h1>

        <?php // display form settings ?>
        <form action="option.php" method="post">

            <?php // using WordPress function

                // out put security fields 
                settings_fields( 'iranmap_options' );

                // out put settings sections - menu slug
                do_settings_sections( 'iranmap' );

                // submit button
                submit_button( );
            ?>

        </form>
    </div>

    <?php
}



// add top-level administrative menu
function iranmap_add_top_level_menu ( ) {
    
    // add menu title, menu name, who can access, url, icon, order
    add_menu_page( 
        'Iran Map',
        'Iran Map Settings',
        'manage_options',
        'iran-map',
        'iranmap_display_settings_page',
        'dashicons-location-alt',
        null
    );

}
add_action( 'admin_menu', 'iranmap_add_top_level_menu' );