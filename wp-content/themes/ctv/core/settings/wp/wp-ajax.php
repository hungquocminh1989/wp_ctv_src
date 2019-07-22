<?php
defined( 'ABSPATH' ) || exit;

/*
|--------------------------------------------------------------------------
| wp_ajax_thongbao
|-------------------------------------------------------------------------- 
*/
add_action( 'wp_ajax_thongbao', 'thongbao_init' );//Khai báo khi sử dụng bên Admin
add_action( 'wp_ajax_nopriv_thongbao', 'thongbao_init' );//Khai báo khi sử dụng bên Public
function thongbao_init() {
 
    //do bên js để dạng json nên giá trị trả về dùng phải encode
    $website = (isset($_POST['website']))?esc_attr($_POST['website']) : '';
    wp_send_json_success('Chào mừng bạn đến với '.$website);
    
}