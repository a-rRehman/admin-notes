<?php
/*
Plugin Name: Admin Notes
Description: Displays custom admin notices in the WordPress dashboard.
Version: 1.0.0
Author: Abdur-Rehman
Author URI: https://steptocode.com
License: GPL2
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('admin_notices', function () {
    echo '<div class="notice notice-info is-dismissible"><p>Welcome to Admin Notes — your space for custom messages.</p></div>';
});
