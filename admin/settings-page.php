<?php // settings menu page



// Exit if file called directly
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}



function iranmap_display_settings_page () {

    // check if user allowed access
    if ( ! current_user_can ( 'manage_options' ) ) return;

    ?>

    <div class="wrap">
        <h1> <?php echo esc_html( get_admin_page_title () ); // display plugin name as page title ?> </h1>

        <?php // display form settings ?>
        <form action="option.php" method="post">

            <?php // using WordPress function

                // out put security fields 
                settings_fields( 'iranmap_options' );

                // out put settings sections - menu slug
                do_settings_sections( 'iranmap' );

                // submit button
                submit_button( );
            ?>

        </form>
    </div>

    <?php
}