<?php // settings menu page



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



// display the plugin settings page
function iran_map_display_settings_page() {
	
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	
	?>
	
	<div class="iran-map-wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			
			<?php
			
			// output security fields
			settings_fields( 'iran_map_options' );
			
			// output setting sections
			do_settings_sections( 'iran-map' );
			
			// submit button
			submit_button();
			
			?>
			
		</form>
		<img id="iran-map-image" src="
		<?php 
			$iran_map_img_background = plugin_dir_url( __FILE__ ) .'/img/iran-map.png'; 
			echo $iran_map_img_background;
		?>
		" alt="iran map">
	</div>
	
	<?php
	
}