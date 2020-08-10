<?php

/*
Plugin Name: Radio Tools
Plugin URI:https://uiux.me/radio-tools
Description: Miscellanious Radio Tools
Version: 1.0
Author: UIUX <me@uiux.me>
Author URI: https://uiux.me
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

class RadioToolsOptions {


    function __construct() {

        if ( is_admin() ){
            add_action('admin_menu', array($this, 'radio_tools_plugin_setup') );
            add_action('admin_init', array($this, 'radio_tools_plugin_register_settings') );
        }

    }

    function radio_tools_plugin_setup(){
        add_menu_page( 'Radio Tools Settings', 'Radio Tools', 'manage_options', 'radio-tools-plugin', array($this, 'radio_tools_plugin_setup_page'), 'dashicons-microphone' );
    }

    function radio_tools_plugin_register_settings() {
        register_setting( 'radio-tools-options', 'radio-tools-stream-url');
        register_setting( 'radio-tools-options', 'radio-tools-stream-proxy');
        register_setting( 'radio-tools-options', 'radio-tools-stream-image');
        register_setting( 'radio-tools-options', 'radio-tools-stream-text');
    }

    function radio_tools_plugin_setup_page(){

        ?>

       <form method="post" action="options.php">

            <?php settings_fields( 'radio-tools-options' ); ?>
            <?php do_settings_sections( 'radio-tools-options' ); ?>
    

        <div class="wrap">

            <div id="icon-options-general" class="icon32"></div>
            <h1>Radio Tools: Settings</h1>

            <div id="poststuff">

                <div id="post-body" class="metabox-holder columns-2">

                    <!-- main content -->
                    <div id="post-body-content">

                        <div class="meta-box-sortables ui-sortable">

                            <div class="postbox">

                                <div class="handlediv" title="Click to toggle"><br></div>
                                <!-- Toggle -->

                                <h2 class="hndle"><span>Stream Settings</span>
                                </h2>

                                <div class="inside">

                                    <table class="widefat">

                                        <tr valign="top">
                                        <th scope="row"><strong>Stream URL</strong></th>
                                        <td><input type="text" name="radio-tools-stream-url" value="<?php echo esc_attr( get_option('radio-tools-stream-url', '') ); ?>" class="large-text" /></td>
                                        </tr>

                                        <tr valign="top">
                                        <th scope="row"><strong>Enable stream proxy</strong></th>
                                        <td><input type="checkbox" name="radio-tools-stream-proxy" value="1"<?php checked( get_option('radio-tools-stream-proxy', false) ); ?>></td>
                                        </tr>

                                    </table>

                                </div>
                                <!-- .inside -->

                            </div>
                            <!-- .postbox -->

                            <div class="postbox">

                                <div class="handlediv" title="Click to toggle"><br></div>
                                <!-- Toggle -->

                                <h2 class="hndle"><span>Display Settings</span>
                                </h2>

                                <div class="inside">

                                    <table class="widefat">

                                        <tr valign="top">
                                        <th scope="row"><strong>Stream Image URL</strong></th>
                                        <td><input type="text" name="radio-tools-stream-image" value="<?php echo esc_attr( get_option('radio-tools-stream-image', '') ); ?>" class="large-text" /></td>
                                        </tr>

                                        <tr valign="top">
                                        <th scope="row"><strong>Stream Text</strong></th>
                                        <td><input type="text" name="radio-tools-stream-text" value="<?php echo esc_attr( get_option('radio-tools-stream-text', '') ); ?>" class="large-text" /></td>
                                        </tr>

                                    </table>

                                </div>
                                <!-- .inside -->

                            </div>
                            <!-- .postbox -->

                        </div>
                        <!-- .meta-box-sortables .ui-sortable -->

                         <?php submit_button('Update Settings', 'primary', 'submit', false); ?>

                    </div>
                    <!-- post-body-content -->

                    <!-- sidebar -->
                    <div id="postbox-container-1" class="postbox-container">

                        <div class="meta-box-sortables">

                            <div class="postbox">

                                <div class="handlediv" title="Click to toggle"><br></div>
                                <!-- Toggle -->

                                <h2 class="hndle">About Radio Tools</h2>

                                <div class="inside">
                                    
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>

                                </div>
                                <!-- .inside -->

                            </div>
                            <!-- .postbox -->

                        </div>
                        <!-- .meta-box-sortables -->

                    </div>
                    <!-- #postbox-container-1 .postbox-container -->

                </div>
                <!-- #post-body .metabox-holder .columns-2 -->

                <br class="clear">
            </div>
            <!-- #poststuff -->

        </div> <!-- .wrap -->
            
        

        </form>


    <?php

    }


}

?>
