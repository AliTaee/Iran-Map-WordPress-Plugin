<?php // Iran Map - Validate Settings



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// validate plugin settings
function iran_map_callback_validate_options($input) {

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