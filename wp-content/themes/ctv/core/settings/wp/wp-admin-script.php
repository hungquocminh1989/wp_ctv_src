<?php
defined( 'ABSPATH' ) || exit;

if (is_admin()){
	add_action('admin_enqueue_scripts', 'admin_style');
	add_action('admin_footer', 'admin_style_footer');
	// Update CSS within in Admin
	function admin_style() {
		wp_enqueue_style('admin-styles', TEMPLATE_URL.'/admin-style.css');
		wp_enqueue_style( 'bootstrap' , TEMPLATE_URL . "/public/css/bootstrap.css");
		wp_enqueue_style( 'bootstrap-dialog' , TEMPLATE_URL . "/public/bootstrap3-dialog/css/bootstrap-dialog.css");
		wp_enqueue_script( 'bootstrap' , TEMPLATE_URL . "/public/js/bootstrap.js", array('jquery'));
		wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/public/bootstrap3-dialog/js/bootstrap-dialog.js");
	}
	function admin_style_footer() {
		locate_template('/inc/js/ajax-core.php', TRUE);
	}
}