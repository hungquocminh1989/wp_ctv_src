<?php
defined( 'ABSPATH' ) || exit;
if (!is_admin()) return;

/**
* Define Metabox Option
*/
$args['id'] = 'demo_metabox_1';//id of metabox
$args['title'] = 'Demo Metabox';//title of metabox
$args['name'] = 'txt_test';//name of control
$args['type'] = ['post'];


/**
* Add And Display Metabox
*/
add_action( 'add_meta_boxes', function() use($args) {
	
	add_meta_box($args['id'],$args['title'],function($post)  use($args) {
		
		$metaboxValue = get_post_meta($post->ID,$args['name'],TRUE);
		//wp_nonce_field($args['name'].'_nonce_check',$args['name'].'_nonce_check');
		?>
		
			<!--HTML START-->
			<label for="<?php echo $args['name'];?>">Metabox field: </label>
			<input type="text" id="<?php echo $args['name'];?>" name="<?php echo $args['name'];?>" value="<?php echo $metaboxValue;?>" />
			<!--HTML END-->
			
		<?php
		
	},$args['type']);
	
});


/**
* Save Metabox
*/
add_action('save_post',function($post_id) use($args) {
	
	if(isset($_POST[$args['name']]) === TRUE && $_POST[$args['name']] != ''
		//&& isset($_POST[$args['name'].'_nonce_check']) === TRUE 
		//&& wp_verify_nonce($_POST[$args['name'].'_nonce_check'],$args['name'].'_nonce_check') === FALSE
	){
		$saveValue = sanitize_text_field($_POST[$args['name']]);
		update_post_meta( $post_id, $args['name'], $saveValue );
	}
	
});




