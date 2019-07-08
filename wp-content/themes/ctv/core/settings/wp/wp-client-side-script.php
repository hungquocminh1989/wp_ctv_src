<?php
defined( 'ABSPATH' ) || exit;
if (is_admin()) return;

add_action('wp_enqueue_scripts', 'repoLoadEnqueueScripts', 99);
add_action('wp_print_footer_scripts', 'repoLoadTagScript', 99);

function repoLoadEnqueueScripts(){
	//Load Defautl
	repoLoadTemplate();	
	//Load style.css Wordpress, it's use overide
	wp_enqueue_style('style',get_stylesheet_uri());	
}

function repoLoadTemplate(){
	wp_enqueue_style( 'bootstrap_css' , TEMPLATE_URL . "/public/css/bootstrap.css");
	wp_enqueue_style( 'bootstrap-dialog_css' , TEMPLATE_URL . "/public/bootstrap3-dialog/css/bootstrap-dialog.css");
	
	wp_enqueue_script('jquery_js' , TEMPLATE_URL . "/public/js/jquery-1.10.2.js",NULL,NULL,TRUE);
	wp_enqueue_script('bootstrap_js' , TEMPLATE_URL . "/public/js/bootstrap.js",NULL,NULL,TRUE);
	wp_enqueue_script('bootstrap-dialog_js' , TEMPLATE_URL . "/public/bootstrap3-dialog/js/bootstrap-dialog.js",NULL,NULL,TRUE);
}

function repoLoadTagScript() {
    /*locate_template('/inc/script/index.php', TRUE);
    
    if(is_product() == TRUE){
		locate_template('/inc/script/product-single.php', TRUE);
	}*/
    
}