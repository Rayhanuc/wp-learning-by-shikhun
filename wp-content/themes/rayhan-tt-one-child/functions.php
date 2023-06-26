<?php

// Check if Elementor plugin is active
add_action('admin_init', 'check_elementor_plugin');

function check_elementor_plugin() {
    if (is_plugin_active('elementor/elementor.php')) {
      // Elementor is active
      // Your code here
      // Display admin notice
      add_action('admin_notices', 'display_admin_notice');

      function display_admin_notice() {
          echo '<div class="notice notice-info is-dismissible">
              <p>This is your admin notice.</p>
          </div>';
      }
    } else {
        // Elementor is not active
        // Your code here
        echo 'Elementor is not active.';
    }
}





