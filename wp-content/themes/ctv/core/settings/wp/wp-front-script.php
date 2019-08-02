<?php
defined( 'ABSPATH' ) || exit;
if (!is_admin()){
	add_action('wp_enqueue_scripts', 'repoLoadEnqueueScripts', 99);
	add_action('wp_print_footer_scripts', 'repoLoadTagScript', 99);

	function repoLoadEnqueueScripts(){
		//Load Defautl
		repoLoadTemplate();	
		//Load style.css Wordpress, it's use overide
		wp_enqueue_style('style',get_stylesheet_uri());	
	}

	function repoLoadTemplate(){
		
	}

	function repoLoadTagScript() {
	    /*locate_template('/inc/script/index.php', TRUE);
	    
	    if(is_product() == TRUE){
			locate_template('/inc/script/product-single.php', TRUE);
		}*/
	    
	}
}