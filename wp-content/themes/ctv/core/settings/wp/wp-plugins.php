<?php
defined( 'ABSPATH' ) || exit;
if (!is_admin()) return;

add_action( 'after_setup_theme',  function(){
	
	repoLoadPluginFromZip('advanced-custom-fields-pro', 'acf.php');
	repoLoadPluginFromZip('query-monitor', 'query-monitor.php');
	//repoLoadPluginFromZip('woocommerce', 'woocommerce.php');
	repoLoadPluginFromZip('wp-reset', 'wp-reset.php');
	repoLoadPluginFromStore();
	
});
add_action('tgmpa_register', 'repoLoadPluginFromStore');

function repoLoadPluginFromZip($pluginFolder, $pluginFile, $active = TRUE){
	
	/**
	* Unzip and load plugin
	*/
	if(file_exists(WP_PLUGIN_DIR . "/$pluginFolder") === FALSE){
		if(unzip_file(TEMPLATEPATH . "/plugins/$pluginFolder" . '.zip',WP_PLUGIN_DIR) === TRUE)
		{
			if($active == TRUE){
				wp_clean_plugins_cache();
				if (is_plugin_active( WP_PLUGIN_DIR . "/$pluginFolder/$pluginFile") === FALSE) {
					activate_plugin(WP_PLUGIN_DIR . "/$pluginFolder/$pluginFile");
				}
			}
		}
	}
	
}
function repoLoadPluginFromStore() {
	// Khai bao plugin can cai dat
	$plugins = [
		[
			'name' => 'Post Type Order',
			'slug' => 'post-types-order',
			'required' => TRUE,
		],
		[
			'name' => 'Custom Sidebars',
			'slug' => 'custom-sidebars',
			'required' => TRUE,
		],
		[
			'name' => 'Post Type Order',
			'slug' => 'post-types-order',
			'required' => TRUE,
		],
		[
			'name' => 'JWT Authentication for WP REST API',
			'slug' => 'jwt-authentication-for-wp-rest-api',
			'required' => TRUE,
		],
		[
			'name' => 'REST API Toolbox',
			'slug' => 'rest-api-toolbox-settings',
			'required' => TRUE,
		],
		[
			'name' => 'Woocommerce',
			'slug' => 'woocommerce',
			'required' => TRUE,
		],
		[
			'name' => 'Regenerate Thumbnails',
			'slug' => 'regenerate-thumbnails',
			'required' => TRUE,
		],
		[
			'name' => 'Simply Show Hooks',
			'slug' => 'simply-show-hooks',
			'required' => TRUE,
		],
	];

	// Thiet lap TGM
	$configs = [
		'menu' => 'tp_plugin_install',
		'has_notice' => TRUE,
		'dismissable' => false,
		'is_automatic' => TRUE,
	];
	tgmpa( $plugins, $configs );

}