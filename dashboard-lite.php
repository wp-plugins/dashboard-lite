<?php
/*
Plugin Name: Dashboard Lite
Plugin URI: http://www.bluetrait.com/page/wordpress-plugins/
Description: Removes incoming links, dev news and planet news off the dashboard. Requires WordPress 2.2.0+
Version: 0.1
Author: Michael Dale
Author URI: http://www.bluetrait.com/
*/

add_action('admin_xml_ns', 'btdl_remove_dashboard_js');

function btdl_remove_dashboard_js() {

	remove_action('admin_head', 'index_js');

}

?>