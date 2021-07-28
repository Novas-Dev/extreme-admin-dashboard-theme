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
  echo "<link rel='stylesheet' href='../wp-content/plugins/admin-dashboard/style.css'>";
}




?>
