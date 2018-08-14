<?php 



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


// callback: login section
function iran_map_callback_section_color() {
	
	echo '<p>' . esc_html__( 'These settings enable you to customize the iran map plugin.', 'iran-map' ) . '</p>';
	
}

// callback: select field
function iran_map_color_callback_field_select( $args ) {

	$options = get_option( 'iran_map_options', iran_map_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	$select_options = array(
		
		'default'   	=> esc_html__( 'Default', 'iran-map' ),
		'green'     	=> esc_html__( 'Persian Green', 'iran-map' ),
		'full'        	=> esc_html__( 'Color full', 'iran-map' ),
		'black'   		=> esc_html__( 'Black and white', 'iran-map' ),
		'blue' 			=> esc_html__( 'Persian Blue', 'iran-map' ),
		'cyan'     		=> esc_html__( 'Cyan', 'iran-map' ),
		
	);
	
	echo '<select id="iran_map_options_'. $id .'" name="iran_map_options['. $id .']">';
	
	foreach ( $select_options as $value => $option ) {
		
		$selected = selected( $selected_option === $value, true, false );
		
		echo '<option value="'. $value .'"'. $selected .'>'. $option .'</option>';
		
	}
	
	echo '</select> <label for="iran_map_options_'. $id .'">'. $label .'</label>';


}