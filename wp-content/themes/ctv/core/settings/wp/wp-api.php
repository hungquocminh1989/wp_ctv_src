<?php
/*
|--------------------------------------------------------------------------
| REST API
|-------------------------------------------------------------------------- 
| Use plusgin jwt-authentication-for-wp-rest-api plz add to htacces

# JWT Start
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{HTTP:Authorization} ^(.*)
RewriteRule ^(.*) - [E=HTTP_AUTHORIZATION:%1]
</IfModule>
# JWT End

*/
defined( 'ABSPATH' ) || exit;

add_action('rest_api_init', function () {
	register_rest_route('myplugin/v1', '/author/(?P<id>\d+)', array(
		'methods' => 'GET',
		'callback' => 'my_awesome_func',
	));
	register_rest_route('koi/v1', '/sync-post/', array(
		'methods' => 'POST',
		'callback' => 'api_edit_create_post',
	));
});

function my_awesome_func($request) {
	
	echo "<pre>";
	var_dump($request->get_params());	
	die();

	$posts = get_posts( array(
		'author' => $data['id'],
	) );
 	
	if ( empty( $posts ) ) {
		return new WP_Error( 'no_author', 'Invalid author', array( 'status' => 404 ) );
	}
	/*if ( empty( $posts ) ) {
		return null;
	}*/
 
  return $posts[0]->post_title;
}

function api_edit_create_post($request){
	$param = $request->get_params();
	//if(isset($param['post_old_title'])){
		$args = array(
			'title'        => $param['post_title'],
			'post_type'   => 'post',
		);
		$my_posts = get_posts($args, ARRAY_A);
		if( $my_posts ){
			$param['ID'] = $my_posts[0]->ID;
			return wp_update_post($param);
		}else{
			return wp_insert_post($param);
		}
	//}

	return false;

}