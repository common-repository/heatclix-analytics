<?php
/**
 * Created by IMCode Design
 * User: Sven Schindler
 * URI: https://imcode-design.com
 * Projekt: heatclix
 * Date: 13.03.2018
 */

function heatclix_plugin_menu() {
    add_menu_page( 'Heatclix', 'Heatclix', 'manage_options', 'heatclix_plugin', 'heatclix_plugin_ausgabe', esc_url( plugins_url( '../assets/img/icon.png', __FILE__  ) ), 30 );

    function heatclix_plugin_ausgabe() {
        if( is_admin() ){
            require_once ( HEATCLIX__PLUGIN_DIR.'inc/heatclix_plugin_info.php' );
        }
    }
}

add_action( 'admin_menu', 'heatclix_plugin_menu' );