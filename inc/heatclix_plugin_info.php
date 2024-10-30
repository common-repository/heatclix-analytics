<?php
/**
 * Created by IMCode Design
 * User: Sven Schindler
 * URI: https://imcode-design.com
 * Projekt: heatclix
 * Date: 13.03.2018
 */


settings_fields('heatclix_plugin_opt_options');
$options = get_option('heatclix_plugin_opt');


wp_register_style( 'heatclix-style.css', esc_url( plugins_url( '../assets/heatclix-style.css', __FILE__  ) ), array(), HEATCLIX_VERSION );
wp_enqueue_style( 'heatclix-style.css');
?>
<div class="wrap">
    <div class="container heatclix-design">
        <div class="heatclix-headline-container">
            <div class="heatclix-div-img">
                <img class="heatclix-headline-img" src="<?php echo esc_url( plugins_url( '../assets/img/heatclix-logo.png', __FILE__  ) );?>">
            </div>
            <div class="heatclix-div-headline">
                <h1>Wordpress Plugin</h1>
            </div>
        </div>
        <div class="heatclix-content-tracking-container">
            <h1>Verbindung zu Heatclix herstellen!</h1>
            <hr class="heatclix-underline">
            <div class="heatclix-content-tracking-div">
                <h2>Geben Sie hier Ihre Tracking Daten ein!</h2>
                <span>Ihre Tracking Daten finden Sie in Ihrem Heatclix Konto unter "Tracking Setup".</span>
            </div>
            <form method="post" action="options.php">
                <?php
                settings_fields('heatclix_plugin_opt_options');
                $options = get_option('heatclix_plugin_opt');
                ?>
            <div class="heatclix-label">
                <label for="project_name">Projekt Name:</label>
                <input type="text" name="heatclix_plugin_opt[project_name]" id="project_name" value="<?php echo $options['project_name']; ?>" placeholder="Geben Sie hier Ihren Projektnamen ein ...">
            </div>
            <div class="heatclix-label">
                <label for="project_key">Projekt Key:</label>
                <input type="text" name="heatclix_plugin_opt[project_key]" id="project_key" value="<?php echo $options['project_key']; ?>"  placeholder="Geben Sie hier Ihren Projekt Key ein ...">
            </div>
            <div>
                <p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
            </div>
            </form>
        </div>

        <div class="heatclix-content-info-container">
            <h1>Was ist Heatclix?</h1>
            <div class="heatclix-content-info-div">
                <p id="heatclix-info-text">
                    Das Heatclix Plugin stellt eine Verbindung zum Heatclix Cloud System her. Mit dieser Verbindung sind
                    Sie in der Lage eine detaillierte Analyse durchzuführen. Heatclix stellt Ihnen hierfür Heatmaps,
                    Recordings, Funnel Tracking, Formular Tracking und einen Split-Test zur Verfügung. Das System können
                    Sie kostenlos oder in Verbindung mit einem kostenpflichtigen Account nutzen.
                </p>
                <div class="heatclix-btn-container">
                    <a href="https://heatclix.net/?code=wpint" class="button" id="heatclix-info-btn2" target="_blank" role="button">Funktionen und Accounts</a>
                </div>
            </div>
        </div>
        <div class="heatclix-content-share-container">
            <h2>FolgenSie uns auf:</h2>
            <div class="heatclix-content-share-div">
                <div class="heatclix-div-img">
                    <a href="https://www.facebook.com/heatclix/" target="_blank" id="heatclix-fb"></a>
                </div>
                <div class="heatclix-div-img">
                    <a href="https://twitter.com/heatclix" target="_blank" id="heatclix-tw"></a>
                </div>
                <div class="heatclix-div-img">
                    <a href="https://www.instagram.com/heatclix/" target="_blank" id="heatclix-in"></a>
                </div>

            </div>
        </div>
    </div>

</div>