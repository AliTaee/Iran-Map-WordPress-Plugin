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


// callback: color section
function iran_map_callback_section_color() {
	
	echo '<p>' . __( 'These settings enable you to customize the iran map plugin.', 'iran-map' ) . '</p>';
	
}

// callback: insert link section
function iran_map_callback_insert_link() {
	
	echo '<p>' . __( 'These settings enable you to inset link for each city.', 'iran-map' ) . '</p>';
	
}

// callback: select field
function iran_map_color_callback_field_select( $args ) {

	$options = get_option( 'iran_map_options', iran_map_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	$select_options = array(
		
		'default'   	=> __( 'Default', 'iran-map' ),
		'green'     	=> __( 'Persian Green', 'iran-map' ),
		'full'        	=> __( 'Color full', 'iran-map' ),
		'black'   		=> __( 'Black and white', 'iran-map' ),
		'blue' 			=> __( 'Persian Blue', 'iran-map' ),
		'cyan'     		=> __( 'Cyan', 'iran-map' ),
		
	);
	
	echo '<select id="iran_map_options_'. $id .'" name="iran_map_options['. $id .']">';
	
	foreach ( $select_options as $value => $option ) {
		
		$selected = selected( $selected_option === $value, true, false );
		
		echo '<option value="'. $value .'"'. $selected .'>'. $option .'</option>';
		
	}
	
	echo '</select> <label for="iran_map_options_'. $id .'">'. $label .'</label>';


}



// callback: text field
function iran_map_callback_field_text( $args ) {
	
	$options = get_option( 'iran_map_options', iran_map_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	echo '<input id="iran_map_options_'. $id .'" name="iran_map_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="iran_map_options_'. $id .'">'. $label .'</label>';
	
}