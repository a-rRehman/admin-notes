<?php
/*
Plugin Name: Admin Notes
Description: Displays custom admin notices in the WordPress dashboard.
Version: 1.0.0
Author: Abdur-Rehman
Author URI: https://steptocode.com
License: GPL2
*/

if (!defined('ABSPATH')) exit;

define('ADMIN_NOTES_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once ADMIN_NOTES_PLUGIN_DIR . 'includes/settings-page.php';

// Show notice on dashboard
add_action('admin_notices', function () {
    $message = get_option('admin_notes_message', '');
    if (!empty($message)) {
        echo '<div class="notice notice-info is-dismissible"><p>' . esc_html($message) . '</p></div>';
    }
});

//Code by abdurehman