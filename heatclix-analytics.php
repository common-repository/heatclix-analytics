<?php

/*
 * Plugin Name: Heatclix Analytics
 * Plugin URI:  https://heatclix.net/funktionen/
 * Description: Heatclix ist ein Analyse, Conversion und Marketing Tool für die perfekte Analyse Ihrer Website. Sehen Sie, wie sich der Websitebesucher verhält, um Ihre Prozesse zu optimieren. Heatclix enthält ein Heatmap-, Recording-, Funnel-, Formular-, Splittest- und Countdown-Tool. Das Heatclix Wordpress Plugin ermöglicht es unseren Kunden den Trackingcode bequem und einfach einzubinden. Das Plugin funktioniert nur in Verbindung mit dem System von https://heatclix.net.
 * Version: 1.0.8
 * Author: Heatclix
 * Author URI: https://heatclix.net
 * License: GPLv2 oder höher | Nur in Verbindung mit einem kostenpflichtigen Abonement bei https://heatclix.net
 * Network: true
 *
 * Text Domain: heatclix-analytics
 * Domain Path: /languages/
 */

/*
Heatclix Analytics is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Heatclix Analytics is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Heatclix Analytics. If not, see http://www.gnu.org/licenses/gpl.html.

Copyright 2017-2021 Heatclix.
*/


if ( !function_exists( 'add_action' ) ) {
    echo 'Hello, this is a WordPress plugin and cannot work without the WordPress environment.';
    exit;
}

defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );
define( 'HEATCLIX_VERSION', '1.0.1' );
define( 'HEATCLIX__MINIMUM_WP_VERSION', '4.0' );
define( 'HEATCLIX__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'HEATCLIX_DELETE_LIMIT', 100000 );

if( is_admin() ){
    require_once( HEATCLIX__PLUGIN_DIR.'inc/heatclix_plugin_menu.php' );
    require_once( HEATCLIX__PLUGIN_DIR.'inc/heatclix_plugin_option.php' );
}
require_once( HEATCLIX__PLUGIN_DIR.'inc/heatclix_plugin_frontend.php' );

