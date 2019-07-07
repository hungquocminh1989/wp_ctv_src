<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme',  function(){
	
});

//Load widget
add_action( 'widgets_init', 'repo_LoadWidgets');

function repo_LoadWidgets(){
	
	register_widget( 'Foo_Widget' );
	register_widget( 'Main_Widget' );
	
}