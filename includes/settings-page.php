<?php

// Add menu item
add_action('admin_menu', function () {
    add_options_page(
        'Admin Notes Settings',
        'Admin Notes',
        'manage_options',
        'admin-notes',
        'admin_notes_settings_page'
    );
});

// Register setting
add_action('admin_init', function () {
    register_setting('admin_notes_options_group', 'admin_notes_message');
    register_setting('admin_notes_options_group', 'admin_notes_type');
});

function admin_notes_settings_page()
{
?>
    <div class="wrap">
        <h1>Admin Notes Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('admin_notes_options_group'); ?>
            <?php do_settings_sections('admin_notes_options_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Admin Notice Message</th>
                    <td>
                        <textarea name="admin_notes_message" rows="5" cols="50"><?php echo esc_textarea(get_option('admin_notes_message')); ?></textarea>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Notice Type</th>
                    <td>
                        <select name="admin_notes_type">
                            <?php
                            $types = ['info', 'success', 'warning', 'error'];
                            $current = get_option('admin_notes_type', 'info');
                            foreach ($types as $type) {
                                echo "<option value='$type'" . selected($current, $type, false) . ">$type</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php
}
