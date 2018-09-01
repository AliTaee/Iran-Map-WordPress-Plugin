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
        'iran_map_section_settings', 
        __( 'Customize Iran Map', 'iran-map' ),
		'iran_map_callback_section_settings', 
		'iran-map'
	);


	add_settings_section( 
        'iran_map_insert_link', 
        __( 'Insert link', 'iran-map' ),
		'iran_map_callback_insert_link', 
		'iran-map'
	);



	add_settings_field(
		'iran_map_shortcut_code',
		__( 'Show map', 'iran-map' ),
		'iran_map_callback_show_map',
		'iran-map',
		'iran_map_section_settings'
	);


	add_settings_field(
		'custom_color',
		__( 'Custom color', 'iran-map' ),
		'iran_map_color_callback_field_select',
		'iran-map',
		'iran_map_section_settings',
		[ 'id' => 'custom_color', 'label' => __( 'Select color scheme for iran map', 'iran-map' ) ]
	);

	// tehran
	add_settings_field(
		'link_tehran',
		__( 'Tehran link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_tehran', 'label' => __( 'Insert link for tehran', 'iran-map' ) ]
	);

	// isfahan
	add_settings_field(
		'link_isfahan',
		__( 'Esfahan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_isfahan', 'label' => __( 'Insert link for esfahah', 'iran-map' ) ]
	);

	// shiraz
	add_settings_field(
		'link_shiraz',
		__( 'Shiraz link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_shiraz', 'label' => __( 'Insert link for shiraz', 'iran-map' ) ]
	);

	// mashhad
	add_settings_field(
		'link_mashhad',
		__( 'Mashhad link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_mashhad', 'label' => __( 'Insert link for mashhad', 'iran-map' ) ]
	);

	// yazd
	add_settings_field(
		'link_yazd',
		__( 'Yazd link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_yazd', 'label' => __( 'Insert link for Yazd', 'iran-map' ) ]
	);

	// semnan
	add_settings_field(
		'link_semnan',
		__( 'Semnan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_semnan', 'label' => __( 'Insert link for semnan', 'iran-map' ) ]
	);

	// kerman
	add_settings_field(
		'link_kerman',
		__( 'Kerman link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_kerman', 'label' => __( 'Insert link for kerman', 'iran-map' ) ]
	);

	// khuzestan
	add_settings_field(
		'link_khuzestan',
		__( 'Khuzestan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_khuzestan', 'label' => __( 'Insert link for khuzestan', 'iran-map' ) ]
	);
	
}
add_action( 'admin_init', 'iran_map_register_settings' );