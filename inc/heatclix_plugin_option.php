<?php
/**
 * Created by IMCode Design
 * User: Sven Schindler
 * URI: https://imcode-design.com
 * Projekt: heatclix
 * Date: 13.03.2018
 */

add_action( 'admin_init','heatclix_plugin_opt_init' );

function heatclix_plugin_opt_init() {
    register_setting( 'heatclix_plugin_opt_options','heatclix_plugin_opt','heatclix_plugin_opt_validate' );
}

function heatclix_plugin_opt_validate( $input ) {
    return $input;
}