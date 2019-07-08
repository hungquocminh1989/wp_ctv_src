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
        $sql = "CREATE TABLE `". $wp_track_table . "` ( ";
        $sql .= "  `id`  int(11)   NOT NULL auto_increment, ";
        $sql .= "  `pincode`  int(128)   NOT NULL, ";
        $sql .= "  PRIMARY KEY `order_id` (`id`) "; 
        $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }
}