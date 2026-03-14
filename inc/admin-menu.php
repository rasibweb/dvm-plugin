<?php
add_action( 'admin_menu', 'dvm_admin_menu' );
function dvm_admin_menu() {
    add_menu_page(
        'DVM Plugin Options',
        'DVM Options',
        'manage_options',
        'dvm-plugin',
        'dvm_options_page_html',
        //plugin_dir_url(__FILE__) . 'images/icon_dvm.png',
        'dashicons-admin-generic',
        20
    );

    add_submenu_page(
        'tools.php',
        'DVM Sub Options',
        'DVM Sub Options',
        'manage_options',
        'dvm-sub-options',
        'dvm_sub_options_page_html',
    );
}
