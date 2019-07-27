<?php
defined( 'ABSPATH' ) || exit;

if (is_admin()){
	add_action('admin_head', 'repo_ajax_script');
	add_action('shutdown', 'repo_ajax_loader_script');
	
	// Update CSS within in Admin
	function repo_ajax_script() {
		wp_enqueue_style('admin-styles', TEMPLATE_URL.'/admin-style.css');
		wp_enqueue_style( 'bootstrap' , TEMPLATE_URL . "/public/css/bootstrap.css");
		wp_enqueue_style( 'bootstrap-dialog' , TEMPLATE_URL . "/public/bootstrap3-dialog/css/bootstrap-dialog.css");
		wp_enqueue_script( 'bootstrap' , TEMPLATE_URL . "/public/js/bootstrap.js");
		wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/public/bootstrap3-dialog/js/bootstrap-dialog.js");
		locate_template('/inc/ajax/ajax-core.php', TRUE);
	}
	
	function repo_ajax_loader_script(){
		locate_template('/inc/ajax/ajax-loader.php', TRUE);
	}
	
}