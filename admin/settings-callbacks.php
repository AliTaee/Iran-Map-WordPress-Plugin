<?php // iran map - callbacks functions



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// callback: color section
function iran_map_callback_section_settings() {
	
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



// callback: show map shortcut
function iran_map_callback_show_map() {
	
	echo '[display_iran_map]<br />';
	_e( 'Copy this shortcut to display map' , 'iran-map' );
	
}