<?php
/*
Plugin Name: Dashboard Lite
Plugin URI: http://www.bluetrait.com/page/wordpress-plugins/
Description: Removes incoming links, dev news and planet news off the dashboard. Requires WordPress 2.2.0+
Version: 0.2
Author: Michael Dale
Author URI: http://www.bluetrait.com/
*/

//stop people from accessing the file directly and causing errors.
if (!function_exists('add_action')) die('You cannot run this file directly.');

add_action('admin_head', 'btdl_remove_dashboard_js', 1);

function btdl_remove_dashboard_js() {

	remove_action('admin_head', 'index_js');

}

?>