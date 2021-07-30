<?php
/*
Plugin Name: Admin Dashboard
Plugin URL:
Description: Customize Admin Dashboard
Author: Novas Dev. Team
Author URL:
Version: 1.0
*/



add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo "<link rel='stylesheet' href='../wp-content/plugins/admin-dashboard/assets/css/dash-style.css'>";
  echo  '<link rel="preconnect" href="https://fonts.googleapis.com">';
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
  echo  '<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">';
}

function extreme_login_css() {
    echo "<link rel='stylesheet' href='wp-content/plugins/admin-dashboard/assets/css/login-style.css'>";
    echo  '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo  '<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">';
}
add_action('login_head', 'extreme_login_css');





?>
