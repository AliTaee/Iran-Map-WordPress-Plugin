<?php // register settings



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// register plugin settings
function iran_map_register_settings() {
	
	register_setting( 
		'iran_map_options', 
		'iran_map_options', 
		'iran_map_callback_validate_options' 
    ); 
	

	add_settings_section( 
        'iran_map_section_color', 
        esc_html__( 'Customize Iran Map color', 'iran-map' ),
		'iran_map_callback_section_color', 
		'iran-map'
	);


	add_settings_field(
		'custom_color',
		esc_html__( 'Custom color', 'iran-map' ),
		'iran_map_color_callback_field_select',
		'iran-map',
		'iran_map_section_color',
		[ 'id' => 'custom_color', 'label' => esc_html__( 'Select color scheme for iran map', 'iran-map' ) ]
	);
	
}
add_action( 'admin_init', 'iran_map_register_settings' );