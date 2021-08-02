<?php
/*
Plugin Name: Extreme Admin Dashboard Theme
Plugin URL:
Description: One click Plugin - Just enable and enjoy your custom admin and login page
Author: Novas Dev. Team
Version: 1.0
*/


function ecpt_dashboard_assets() {
    wp_enqueue_style('ecpt-dash-css-file', plugin_dir_url(__FILE__) . 'assets/css/dash-style.css', '', time());
}
add_action('admin_enqueue_scripts', 'ecpt_dashboard_assets');

function ecpt_login_assets() {
    wp_enqueue_style('ecpt-login-css-file', plugin_dir_url(__FILE__) . 'assets/css/login-style.css', '', time());
}
add_action('login_enqueue_scripts', 'ecpt_login_assets');

?>
