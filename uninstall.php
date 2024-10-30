<?php
/**
 * Created by IMCode Design
 * User: Sven Schindler
 * URI: https://imcode-design.com
 * Projekt: heatclix-analytics
 * Date: 23.06.2018
 */

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$option_name = 'heatclix_plugin_opt';

delete_option( $option_name );

// for site options in Multisite
delete_site_option( $option_name );
