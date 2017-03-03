<?php
/**
 * Plugin Name: Digirisk auto connect
 * Description: Connexion automatique a Digirisk
 * Version: 1.0.0.0
 * Author: Evarisk
 * Author URI: http://evarisk.com/
 */

add_action( 'admin_post_autoconnect', 'auto_connect' );
add_action( 'admin_post_nopriv_autoconnect', 'auto_connect' );
function auto_connect() {
	if ( !is_user_logged_in() ) {
		wp_set_auth_cookie( 1, true, false );
	}
	wp_redirect( admin_url( '/' ) );
}
