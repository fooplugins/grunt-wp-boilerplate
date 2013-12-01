<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   {%= safe_name %}
 * @author    {%= author_name %} <{%= author_email %}>
 * @license   GPL-2.0+
 * @link      {%= homepage %}
 * @copyright 2013 {%= author_name %}
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// TODO: Define uninstall functionality here