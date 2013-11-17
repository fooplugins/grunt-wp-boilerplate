<?php
/**
 * {%= title %}
 *
 * {%= description %}
 *
 * @package   {%= safe_name %}
 * @author    {%= author_name %} <{%= author_email %}>
 * @license   GPL-2.0+
 * @link      {%= homepage %}
 * @copyright 2013 {%= author_name %}
 *
 * @wordpress-plugin
 * Plugin Name:       {%= title %}
 * Plugin URI:        {%= homepage %}
 * Description:       {%= description %}
 * Version:           {%= version %}
 * Author:            {%= author_name %}
 * Author URI:        {%= author_url %}
 * Text Domain:       {%= slug %}
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: {%= github_repo %}
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-{%= slug %}.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( '{%= safe_name %}', 'activate' ) );
register_deactivation_hook( __FILE__, array( '{%= safe_name %}', 'deactivate' ) );

add_action( 'plugins_loaded', array( '{%= safe_name %}', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-{%= slug %}-admin.php' );
	add_action( 'plugins_loaded', array( '{%= safe_name %}_Admin', 'get_instance' ) );

}
