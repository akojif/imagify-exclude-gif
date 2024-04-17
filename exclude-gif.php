<?php
/*
Plugin Name: Imagify - Exclude GIF Extension
Description: This plugin extends Imagify by excluding GIF images from WebP conversion.
Plugin URI: https://github.com/akojif/imagify-exclude-gif
Version: 1.0
Author: Francis Akoji
Author URI: https://francisakoji.com
Requires PHP: 7.2
*/

add_action( 'admin_init', 'check_imagify_status_on_activation' );

function check_imagify_status_on_activation() {
    if ( ! is_plugin_active( 'imagify/imagify.php' ) && current_user_can( 'activate_plugins' ) ) {
        add_action( 'admin_notices', 'imagify_not_activated_notice' );
        deactivate_plugins( plugin_basename( __FILE__ ) );
        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
    }
}

function imagify_not_activated_notice() {
    echo '<div class="error"><p>';
    printf(
        __( 'Please activate Imagify plugin before activating %s.' ),
        '<strong>Exclude GIF Conversion from Imagify</strong>'
    );
    echo '</p></div>';
}
require_once plugin_dir_path( __FILE__ ) . 'includes/webp-gif.php';

add_filter( 'imagify_before_optimize_size', 'no_webp_for_gif', 10, 7 );

?>