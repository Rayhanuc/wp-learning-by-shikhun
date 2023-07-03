<?php
// include_once('elementor_addon/addons.php');
// Check if Elementor plugin is active
add_action('admin_init', 'check_elementor_plugin');

function check_elementor_plugin() {
    if (is_plugin_active('elementor/elementor.php')) {
      // Elementor is active
      include_once('elementor-addon/addons.php');
      // Your code here
      // Display admin notice
      
      // function display_admin_notice() {
      //   include_once('elementor_addons/addons.php');
      // }
      // add_action('admin_notices', 'display_admin_notice');
    } else {
        // Elementor is not active
        // Your code here
        add_action('admin_notices', 'display_admin_notice');

      function display_admin_notice() {
          echo '<div class="notice notice-warning is-dismissible">
              <p>This theme required elementor to active or installed.</p>
          </div>';
      }
    }
}





