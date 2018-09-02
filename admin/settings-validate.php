<?php // Iran Map - Validate Settings



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// validate plugin settings
function iran_map_callback_validate_options($input) {


	// Isfahan
	if ( isset( $input['link_isfahan'] ) ) {
		
		$input['link_isfahan'] = esc_url( $input['link_isfahan'] );
		
	}

	// Fars
	if ( isset( $input['link_fars'] ) ) {
		
		$input['link_fars'] = esc_url( $input['link_fars'] );
		
	}

	// Mashhad
	if ( isset( $input['link_mashhad'] ) ) {
		
		$input['link_mashhad'] = esc_url( $input['link_mashhad'] );
		
	}

	// Tehran
	if ( isset( $input['link_tehran'] ) ) {
		
		$input['link_tehran'] = esc_url( $input['link_tehran'] );
		
	}

	// Yazd
	if ( isset( $input['link_yazd'] ) ) {
		
		$input['link_yazd'] = esc_url( $input['link_yazd'] );
		
	}

	// Semnan
	if ( isset( $input['link_semnan'] ) ) {
		
		$input['link_semnan'] = esc_url( $input['link_semnan'] );
		
	}

	// Kerman
	if ( isset( $input['link_kerman'] ) ) {
		
		$input['link_kerman'] = esc_url( $input['link_kerman'] );
		
	}

	// Khuzestan
	if ( isset( $input['link_khuzestan'] ) ) {
		
		$input['link_khuzestan'] = esc_url( $input['link_khuzestan'] );
		
	}

	// Khorasan shomali
	if ( isset( $input['link_khorasan_shomali'] ) ) {
		
		$input['link_khorasan_shomali'] = esc_url( $input['link_khorasan_shomali'] );
		
	}

	// Khorasan jonobi
	if ( isset( $input['link_khorasan_jonobi'] ) ) {
		
		$input['link_khorasan_jonobi'] = esc_url( $input['link_khorasan_jonobi'] );
		
	}

	// Sistan and baluchistan
	if ( isset( $input['link_sistan_baluchistan'] ) ) {
		
		$input['link_sistan_baluchistan'] = esc_url( $input['link_sistan_baluchistan'] );
		
	}

	// Hormozgan
	if ( isset( $input['link_hormozgan'] ) ) {
		
		$input['link_hormozgan'] = esc_url( $input['link_hormozgan'] );
		
	}

	// Bushehr
	if ( isset( $input['link_bushehr'] ) ) {
		
		$input['link_bushehr'] = esc_url( $input['link_bushehr'] );
		
	}

	// Ilam
	if ( isset( $input['link_ilam'] ) ) {
		
		$input['link_ilam'] = esc_url( $input['link_ilam'] );
		
	}

	// Kermanshah
	if ( isset( $input['link_kermanshah'] ) ) {
		
		$input['link_kermanshah'] = esc_url( $input['link_kermanshah'] );
		
	}

	// Kurdestan
	if ( isset( $input['link_kurdestan'] ) ) {
		
		$input['link_kurdestan'] = esc_url( $input['link_kurdestan'] );
		
	}

	// Qom
	if ( isset( $input['link_qom'] ) ) {
		
		$input['link_qom'] = esc_url( $input['link_qom'] );
		
	}

	// Markazi
	if ( isset( $input['link_markazi'] ) ) {
		
		$input['link_markazi'] = esc_url( $input['link_markazi'] );
		
	}

	// Qazvin
	if ( isset( $input['link_qazvin'] ) ) {
		
		$input['link_qazvin'] = esc_url( $input['link_qazvin'] );
		
	}

	// Sistan and baluchistan
	if ( isset( $input['link_sistan_baluchistan'] ) ) {
		
		$input['link_sistan_baluchistan'] = esc_url( $input['link_sistan_baluchistan'] );
		
	}

	// West Azarbayijan
	if ( isset( $input['link_west_azarbayijan'] ) ) {
		
		$input['link_west_azarbayijan'] = esc_url( $input['link_west_azarbayijan'] );
		
	}

	// East Azarbayijan
	if ( isset( $input['link_east_azarbayijan'] ) ) {
		
		$input['link_east_azarbayijan'] = esc_url( $input['link_east_azarbayijan'] );
		
	}

	// Ardebil
	if ( isset( $input['link_ardebil'] ) ) {
		
		$input['link_ardebil'] = esc_url( $input['link_ardebil'] );
		
	}

	// Lorestan
	if ( isset( $input['link_lorestan'] ) ) {
		
		$input['link_lorestan'] = esc_url( $input['link_lorestan'] );
		
	}

	// Gilan
	if ( isset( $input['link_gilan'] ) ) {
		
		$input['link_gilan'] = esc_url( $input['link_gilan'] );
		
	}

	// Mazandaran
	if ( isset( $input['link_mazandaran'] ) ) {
		
		$input['link_mazandaran'] = esc_url( $input['link_mazandaran'] );
		
	}

	// Golestan
	if ( isset( $input['link_golestan'] ) ) {
		
		$input['link_golestan'] = esc_url( $input['link_golestan'] );
		
	}

	// Hamedan
	if ( isset( $input['link_hamedan'] ) ) {
		
		$input['link_hamedan'] = esc_url( $input['link_hamedan'] );
		
	}

	// Zanjan
	if ( isset( $input['link_zanjan'] ) ) {
		
		$input['link_zanjan'] = esc_url( $input['link_zanjan'] );
		
	}

	// Chahar mahale bakhtiyari
	if ( isset( $input['link_chahar_mahale_bakhtiyari'] ) ) {
		
		$input['link_chahar_mahale_bakhtiyari'] = esc_url( $input['link_chahar_mahale_bakhtiyari'] );
		
	}

	// kohgiloye va boyer ahmad
	if ( isset( $input['link_kohgiloye_va_boyer_ahmad'] ) ) {
		
		$input['link_kohgiloye_va_boyer_ahmad'] = esc_url( $input['link_kohgiloye_va_boyer_ahmad'] );
		
	}

	// karaj
	if ( isset( $input['link_karaj'] ) ) {
		
		$input['link_karaj'] = esc_url( $input['link_karaj'] );
		
	}


	// custom scheme
	$select_options = array(
		
		'default'   		=> 'Default',
		'green'     		=> 'Persian Green',
		'full'        		=> 'Color full',
		'black'   			=> 'Black and white',
		'blue' 				=> 'Persian Blue',
		'cyan'     			=> 'Cyan',
		
	);
	
	if ( ! isset( $input['custom_color'] ) ) {
		
		$input['custom_color'] = null;
		
	}
	
	if ( ! array_key_exists( $input['custom_color'], $select_options ) ) {
		
		$input['custom_color'] = null;
	
	}
	
	return $input;
	
}