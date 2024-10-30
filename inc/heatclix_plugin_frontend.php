<?php
/**
 * Created by IMCode Design
 * User: Sven Schindler
 * URI: https://imcode-design.com
 * Projekt: heatclix
 * Date: 13.03.2018
 */

add_action( 'wp_footer', 'heatclix_code_integration' );

function heatclix_code_integration() {
    $options = get_option( 'heatclix_plugin_opt' );
    echo "
        <!-- Heatclix Tracking Code (https://heatclix.net) -->
         <script>
             if (typeof heatclix === 'undefined') {
                 var heatclix_script = document.createElement('script');
                 var heatclix_purl = encodeURIComponent(location.href).replace('.', '~');
                 var heatclixjs = '".$options['project_name']."';
                 var uid = '".$options['project_key']."';
                 heatclix_script.type = 'text/javascript';
                 heatclix_script.src = 'https://app.heatclix.net/?heatclixjs='+heatclixjs+'&uid='+uid+'&purl='+heatclix_purl;
                 document.getElementsByTagName('head')[0].appendChild(heatclix_script);
             }
         </script>
         ";
}