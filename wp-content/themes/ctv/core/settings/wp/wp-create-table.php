<?php
defined( 'ABSPATH' ) || exit;

//Use at Front and Admin

add_action( 'after_setup_theme', 'repoCreateCustomeTable');

function repoCreateCustomeTable(){
	repoCreateFacebookManage();
}

function repoCreateFacebookManage()
{
	global $table_prefix, $wpdb;
	
    $tblname = 'facebook_manage';
    $wp_track_table = $table_prefix . "$tblname";

    #Check to see if the table exists already, if not, then create it

    if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $wp_track_table) 
    {
        $sql = "
        	CREATE TABLE IF NOT EXISTS `$wp_track_table` (
			  `id` bigint(20) NOT NULL AUTO_INCREMENT,
			  `user` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
			  `pass` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
			  `access_token` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
			  `add_datetime` datetime NOT NULL DEFAULT current_timestamp(),
			  `upd_datetime` datetime NOT NULL DEFAULT current_timestamp(),
			  `del_flg` int(1) NOT NULL DEFAULT 0,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;
        ";
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }
}