<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme',  function(){
	
	register_sidebar(array(
		'name'          => THEME_TEXT_START . 'Site Content' . THEME_TEXT_END,
		'id'            => "sidebar-content",
		/*'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",*/
	));

});

