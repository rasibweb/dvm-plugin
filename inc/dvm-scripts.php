<?php

function dvm_plugin_admin_scripts(){
	// for admin pages
	wp_enqueue_style('dvm-plugin-admin-css', DVM_PLUGIN_URL . 'admin/css/dvm-admin.css', '',  DVM_PLUGIN_VERSION );
	wp_enqueue_script('dvm-plugin-admin-js', DVM_PLUGIN_URL . 'admin/js/dvm-admin.js', '',  DVM_PLUGIN_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'dvm_plugin_admin_scripts');

function dvm_plugin_public_scripts(){
	// for frontend pages
	wp_enqueue_style('dvm-plugin-public-css', DVM_PLUGIN_URL . 'public/css/dvm-public.css', '',  DVM_PLUGIN_VERSION );
	wp_enqueue_script('dvm-plugin-public-js', DVM_PLUGIN_URL . 'public/js/dvm-public.js', '',  DVM_PLUGIN_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'dvm_plugin_public_scripts');