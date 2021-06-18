<?php
/*
Plugin Name: wporg-customlogin-page
Plugin URI: http://techhub.com
description: A plugin which customizes the behaviour of the login page  errors and hides the username, this demonstrates hooks[action and filters].
Version: 1.2
Author: Ivan
Author URI: http://techhub.com.
*/
// Custom login ERROR message to keep the site more secure with hooks [filters] used 
 
add_filter( 'login_errors', 'wporghooks_remove_login_errors', 10 );
function wporghooks_remove_login_errors() {
	return 'Incorrect credentials. Please try again!';
}

// Remove the login form box shake animation  with hooks[action] used

add_action( 'login_head', 'remove_login_error_shake' );
function remove_login_error_shake() {
	remove_action( 'login_head', 'wp_shake_js', 12 );
}