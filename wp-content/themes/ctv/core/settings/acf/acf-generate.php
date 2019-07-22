<?php
defined( 'ABSPATH' ) || exit;
//
//define( 'ACF_LITE', true );//Hide ACF Menu
include_once(ABSPATH . 'wp-content/plugins/advanced-custom-fields-pro/acf.php');

//Add ACF with generate code PHP

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d32f3163f9ed',
	'title' => 'Nội Dung Facebook',
	'fields' => array(
		array(
			'key' => 'field_5d32f72b9dded',
			'label' => 'Tiêu Đề',
			'name' => 'fb_tieu_de',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '[ Hàng Quốc Tế Cao Cấp Xách Tay ]',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 2,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d32f341a062d',
			'label' => 'Nội Dung Sản Phẩm',
			'name' => 'fb_noi_dung_san_pham',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d32f7bf9ddef',
			'label' => 'Thông Tin Bảo Hành',
			'name' => 'fb_thong_tin_bao_hanh',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '✔️ Bảo hành 1 năm.
✔️ 1 đổi 1 nếu không giống mẫu.
✔️ Hàng săn sale mới 100% bao giá thị trường.',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d32f42a9a4b0',
			'label' => 'Thông Tin Liên Hệ',
			'name' => 'fb_thong_tin_lien_he',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '✔️ Liên hệ 0902676026 hoặc inbox để xem hàng trực tiếp.',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 2,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d32f7b99ddee',
			'label' => 'Thông Tin Liên Kết',
			'name' => 'fb_thong_tin_lien_ket',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#DongHoNamNu #HangSanSale #DongHoChinhHang #HangXachTay #GiaSock
#ThiTruongGiaReVN #ShopDongHoNamNu #HopTacKinhDoanh #HangNuocNgoai #DongHoThoiTrang',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d3340b624b72',
	'title' => 'Tài Khoản Facebook',
	'fields' => array(
		array(
			'key' => 'field_5d3340cef3dab',
			'label' => 'Tên Đăng Nhập',
			'name' => 'fb_ten_dang_nhap',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d334124f3dac',
			'label' => 'Mật Khẩu',
			'name' => 'fb_mat_khau',
			'type' => 'password',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5d3343300d412',
			'label' => 'Access Token',
			'name' => 'fb_access_token',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d334181f3dad',
			'label' => 'Trạng Thái',
			'name' => 'fb_trang_thai',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				0 => 'Hoạt Động',
				1 => 'Tạm Dừng',
			),
			'default_value' => array(
				0 => 0,
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'token',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;