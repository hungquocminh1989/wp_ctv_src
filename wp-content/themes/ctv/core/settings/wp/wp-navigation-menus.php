<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme',  function(){

	register_nav_menus(array(
		'top-menu' 		=> THEME_TEXT_START . __('Top Navigation') . THEME_TEXT_END,
		'category-menu' 		=> THEME_TEXT_START . __('Category Navigation') . THEME_TEXT_END,
		'bottom-menu' 	=> THEME_TEXT_START . __('Bottom Navigation') . THEME_TEXT_END,
	));

});

function repoCreateTopNavigation(){
	
	add_filter( 'nav_menu_css_class',  function($classes, $item, $args, $depth){
		if($args->walker->has_children){
			
			$classes[] = 'has-submenu';
			$args->link_after = '<i class="fa fa-chevron-down"></i>';
			
		}
		return $classes;
	},1,4);
	
	add_filter( 'nav_menu_submenu_css_class',  function($classes, $args, $depth){
		$classes = [];
		$classes[] = 'submenu';
		$args->link_after = '';
		return $classes;
	},1,3);
	
	if (has_nav_menu('top-menu') === TRUE){
	     wp_nav_menu(array(
	     	'theme_location' => 'top-menu',
	     	'menu_class' => 'main',
	     	'container' => FALSE,
	     	'walker' => new Walker_Nav_Menu_Top()
	     ));  
	}
	
	remove_all_filters('nav_menu_css_class');
	remove_all_filters('nav_menu_submenu_css_class');
	
}

function repoCreateTopCategoryNavigation(){
	
	add_filter( 'nav_menu_css_class',  function($classes, $item, $args, $depth){
		if($args->walker->has_children){
			
			$classes[] = 'has-submenu';
			$args->link_after = '<i class="fa fa-chevron-down"></i>';
		}
		return $classes;
	},1,4);
	
	add_filter( 'nav_menu_submenu_css_class',  function($classes, $args, $depth){
		$classes = [];
		
		if($depth == 0){
			$classes[] = 'submenu';
			$args->link_after = '<i class="fa fa-chevron-down"></i>';
			$args->link_after = '';
		}
		else if($depth == 1){
			$classes[] = 'sub-submenu';
			$args->link_after = '';
		}
		
		return $classes;
	},1,3);
	
	/*add_filter( 'nav_menu_item_title',  function($title, $item, $args, $depth){
		if($depth == 0){
			$args->link_after = '<i class="fa fa-chevron-down"></i>';
		}
		return $title;
	},1,4);*/
	
	if (has_nav_menu('category-menu') === TRUE){
	     wp_nav_menu(array(
	     	'theme_location' => 'category-menu',
	     	'menu_class' => 'catalog',
	     	'container' => FALSE,
	     	'walker' => new Walker_Nav_Menu_Category()
	     ));  
	}
	
	remove_all_filters('nav_menu_css_class');
	remove_all_filters('nav_menu_submenu_css_class');
	
}

