<?php
/*
|--------------------------------------------------------------------------
| POSTTYPE
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;
if (!is_admin()) return;

add_action( 'init', 'repoCreatePostType' );

function repoCreatePostType() {
	
	register_post_type( 'news',
        [
        'label' => 'News',
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => 
            [
                'title',
                'editor',
                'thumbnail',
                'revisions'
            ]
        ]
    );
    
    register_post_type( 'Token',
        [
        'label' => 'Facebook Token',
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => 
            [
                'title',
            ]
        ]
    );
	
}

