<?php
defined( 'ABSPATH' ) || exit;

//Use at Front and Admin
/**
* Modify .htaccess
* Modify default-constants.php
* Copy file wp-login.php and replace wp-login
* Delete file wp-login.php
* Copy folder wp-admin
*/

//Custome Admin URL
/*add_filter('site_url',  'wpadmin_filter', 10, 3);
function wpadmin_filter( $url, $path, $orig_scheme ) {
	$old  = array( "/(wp-admin)/");
	$new  = array( ADMIN_CUSTOME_URL);
	return preg_replace( $old, $new, $url, 1);
}*/

//Custome Login URL
// Redirect đường dẫn đăng nhập ra trang chủ
/*add_filter( 'login_url', 'my_login_page', 10, 3 );
function my_login_page( $login_url, $redirect, $force_reauth ) {
	if (strpos($redirect, 'wp-admin') !== false) 
	{
	    wp_redirect(home_url());
	}
	else{
		$login_url = str_replace('wp-login', LOGIN_CUSTOME_URL, $login_url);
		return $login_url;
	}
}*/

// Thay đổi đường dẫn khi admin quên mật khẩu
/*add_filter('lostpassword_url', 'custom_lost_password_url', 10, 2);
function custom_lost_password_url($lostpassword_url) {
  return LOGIN_CUSTOME_URL. '.php?action=lostpassword';
}*/

// Thay đổi lại đường dẫn khi admin logout
/*add_filter( 'logout_url', 'custom_logout_url');
function custom_logout_url( $login_url)
{
   $url = str_replace( 'wp-login', LOGIN_CUSTOME_URL, $login_url );
   return $url;
}*/