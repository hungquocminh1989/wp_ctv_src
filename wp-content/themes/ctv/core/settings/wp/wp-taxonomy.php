<?php
/*
|--------------------------------------------------------------------------
| TAXONOMY
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;
if (!is_admin()) return;

add_action( 'init', 'repoCreateTaxonomy' );

function repoCreateTaxonomy() {
	
	register_taxonomy(
		'genre',
		'news',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
	
}

