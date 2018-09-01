<?php // Iran Map - Validate Settings



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// validate plugin settings
function iran_map_callback_validate_options($input) {


	// custom url for isfahan city
	if ( isset( $input['link_isfahan'] ) ) {
		
		$input['link_isfahan'] = esc_url( $input['link_isfahan'] );
		
	}

	// custom url for shiraz city
	if ( isset( $input['link_shiraz'] ) ) {
		
		$input['link_shiraz'] = esc_url( $input['link_shiraz'] );
		
	}

	// custom url for mashhad city
	if ( isset( $input['link_mashhad'] ) ) {
		
		$input['link_mashhad'] = esc_url( $input['link_mashhad'] );
		
	}

	// custom url for tehran city
	if ( isset( $input['link_tehran'] ) ) {
		
		$input['link_tehran'] = esc_url( $input['link_tehran'] );
		
	}

	// custom url for yazd city
	if ( isset( $input['link_yazd'] ) ) {
		
		$input['link_yazd'] = esc_url( $input['link_yazd'] );
		
	}

	// custom url for semnan city
	if ( isset( $input['link_semnan'] ) ) {
		
		$input['link_semnan'] = esc_url( $input['link_semnan'] );
		
	}

	// custom url for kerman city
	if ( isset( $input['link_kerman'] ) ) {
		
		$input['link_kerman'] = esc_url( $input['link_kerman'] );
		
	}

	// custom url for khuzestan city
	if ( isset( $input['link_khuzestan'] ) ) {
		
		$input['link_khuzestan'] = esc_url( $input['link_khuzestan'] );
		
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