<?php
defined( 'ABSPATH' ) || exit;

if (is_admin()){
	add_action('admin_enqueue_scripts', 'repo_load_admin_script');
	add_action('shutdown', 'repo_load_core_ajax');
	
	// Update CSS within in Admin
	function repo_load_admin_script() {
		wp_enqueue_style('admin-styles', TEMPLATE_URL.'/admin-style.css');
		wp_enqueue_style( 'bootstrap' , TEMPLATE_URL . "/public/css/bootstrap.css");
		wp_enqueue_style( 'bootstrap-dialog' , TEMPLATE_URL . "/public/bootstrap3-dialog/css/bootstrap-dialog.css");
		wp_enqueue_script( 'bootstrap' , TEMPLATE_URL . "/public/js/bootstrap.js", array('jquery'));
		wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/public/bootstrap3-dialog/js/bootstrap-dialog.js");
	}
	function repo_load_core_ajax() {
		locate_template('/inc/js/ajax-core.php', TRUE);
	}
	
}