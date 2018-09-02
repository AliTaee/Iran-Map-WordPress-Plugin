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

	// Fars
	add_settings_field(
		'link_fars',
		__( 'fars link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_fars', 'label' => __( 'Insert link for fars', 'iran-map' ) ]
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
		__( 'Khozestan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_khuzestan', 'label' => __( 'Insert link for khozestan', 'iran-map' ) ]
	);

	// khorasan shomali
	add_settings_field(
		'link_khorasan_shomali',
		__( 'Noth khorasan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_khorasan_shomali', 'label' => __( 'Insert link for noth khorasan', 'iran-map' ) ]
	);

	// khorasan jonobi
	add_settings_field(
		'link_khorasan_jonobi',
		__( 'South khorasan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_khorasan_jonobi', 'label' => __( 'Insert link for south khorasan', 'iran-map' ) ]
	);

	// Sistan and baluchistan
	add_settings_field(
		'link_sistan_baluchistan',
		__( 'Sistan and baluchistan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_sistan_baluchistan', 'label' => __( 'Insert link for sistan and baluchistan', 'iran-map' ) ]
	);

	// Hormozgan
	add_settings_field(
		'link_hormozgan',
		__( 'Hormozgan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_hormozgan', 'label' => __( 'Insert link for hormozgan', 'iran-map' ) ]
	);

	// Bushehr
	add_settings_field(
		'link_bushehr',
		__( 'Bushehr link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_bushehr', 'label' => __( 'Insert link for Bushehr', 'iran-map' ) ]
	);

	// Ilam
	add_settings_field(
		'link_ilam',
		__( 'Ilam link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_ilam', 'label' => __( 'Insert link for ilam', 'iran-map' ) ]
	);

	// Kermanshah
	add_settings_field(
		'link_kermanshah',
		__( 'Kermanshah link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_kermanshah', 'label' => __( 'Insert link for Kermanshah', 'iran-map' ) ]
	);

	// Khurdestan
	add_settings_field(
		'link_kurdestan',
		__( 'Khurdestan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_kurdestan', 'label' => __( 'Insert link for Khurdestan', 'iran-map' ) ]
	);

	// Qom
	add_settings_field(
		'link_qom',
		__( 'Qom link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_qom', 'label' => __( 'Insert link for qom', 'iran-map' ) ]
	);

	// Markazi
	add_settings_field(
		'link_markazi',
		__( 'Markazi link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_markazi', 'label' => __( 'Insert link for markazi', 'iran-map' ) ]
	);

	// Qazvin
	add_settings_field(
		'link_qazvin',
		__( 'Qazvin link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_qazvin', 'label' => __( 'Insert link for qazvin', 'iran-map' ) ]
	);

	// West Azarbayijan
	add_settings_field(
		'link_west_azarbayijan',
		__( 'West Azarbayijan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_west_azarbayijan', 'label' => __( 'Insert link for west azarbayijan', 'iran-map' ) ]
	);

	// East Azarbayijan
	add_settings_field(
		'link_east_azarbayijan',
		__( 'East Azarbayijan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_east_azarbayijan', 'label' => __( 'Insert link for east azarbayijan', 'iran-map' ) ]
	);

	// Ardebil
	add_settings_field(
		'link_ardebil',
		__( 'Ardebil link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_ardebil', 'label' => __( 'Insert link for ardebil', 'iran-map' ) ]
	);

	// Lorestan
	add_settings_field(
		'link_lorestan',
		__( 'Lorestan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_lorestan', 'label' => __( 'Insert link for lorestan', 'iran-map' ) ]
	);

	// Gilan
	add_settings_field(
		'link_gilan',
		__( 'Gilan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_gilan', 'label' => __( 'Insert link for gilan', 'iran-map' ) ]
	);

	// Mazandaran
	add_settings_field(
		'link_mazandaran',
		__( 'Mazandaran link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_mazandaran', 'label' => __( 'Insert link for mazandaran', 'iran-map' ) ]
	);

	// Golestan
	add_settings_field(
		'link_golestan',
		__( 'Golestan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_golestan', 'label' => __( 'Insert link for Golestan', 'iran-map' ) ]
	);

	// Hamedan
	add_settings_field(
		'link_hamedan',
		__( 'Hamedan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_hamedan', 'label' => __( 'Insert link for hamedan', 'iran-map' ) ]
	);

	// Zanjan
	add_settings_field(
		'link_zanjan',
		__( 'Zanjan link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_zanjan', 'label' => __( 'Insert link for zanjan', 'iran-map' ) ]
	);

	// Chahar mahale bakhtiyari
	add_settings_field(
		'link_chahar_mahale_bakhtiyari',
		__( 'Chahar mahale bakhtiyari link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_chahar_mahale_bakhtiyari', 'label' => __( 'Insert link for Chahar mahale bakhtiyari', 'iran-map' ) ]
	);

	// kohgiloye va boyer ahmad
	add_settings_field(
		'link_kohgiloye_va_boyer_ahmad',
		__( 'Kohgiloye va boyer ahmad link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_kohgiloye_va_boyer_ahmad', 'label' => __( 'Insert link for kohgiloye va boyer ahmad', 'iran-map' ) ]
	);

	// karaj
	add_settings_field(
		'link_karaj',
		__( 'Karaj link', 'iran-map' ),
		'iran_map_callback_field_text',
		'iran-map',
		'iran_map_insert_link',
		[ 'id' => 'link_karaj', 'label' => __( 'Insert link for Karaj', 'iran-map' ) ]
	);
	
}
add_action( 'admin_init', 'iran_map_register_settings' );