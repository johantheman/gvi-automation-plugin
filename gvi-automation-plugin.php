<?php
/*
 *	Plugin Name: Grapevine Automation Plugin
 *	Plugin URI: http://grapevinegroup.co.za/gvi-automation-plugin.php
 *	Description: Marketing automation tool for IBM Watson Automation
 *	Version: 1.0
 *	Author: Johan Erasmus
 *	Author URI: http://grapevinegroup.co.za/
 *	License: GPL2
 *
*/


/*
 *	Add a link to our plugin in the admin menu
 *	under 'Settings > Grapevine Automation Plugin'
 *
*/


function gvi_automation_menu() {

	/*
	 *	Save the add_options_page function with parameters
	 *	add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);
	 *
	*/

	add_options_page(
		'Grapevine Automation Tool',
		'Grapevine Automation Tool',
		'manage_options',
		'gvi-automation-plugin',
		'gvi_automation_tool_options_page'
	);

}
add_action( 'admin_menu', 'gvi_automation_menu' );


function gvi_automation_tool_options_page(){

	if( !current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	require( 'inc/options-page-wrapper.php' );
}