<?php
/*
|--------------------------------------------------------------------------
| https://codex.wordpress.org/Plugin_API/Action_Reference/customize_register
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

//Load  customize : get_theme_mod(...) hoac get_option(...) tuy theo luc add_setting khai bao type

add_action('customize_register','repoCustomizeRegister');
//add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue' ) );

function repoCustomizeRegister($wp_customize) {
	repoDefineSection($wp_customize);
	repoDefineControl($wp_customize);
	repoAddControlToSection($wp_customize);	
}

function repoDefineSection($wp_customize){
	$wp_customize->add_section('SECTION_SiteInfo', array(
        'title'    => 'Thông Tin Site',
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('SECTION_SiteColor', array(
        'title'    => 'Màu Sắc',
        'description' => '',
        'priority' => 120,
    ));
}

function repoDefineControl($wp_customize){
	/*
	|--------------------------------------------------------------------------
	| TEXTBOX
	|-------------------------------------------------------------------------- 
	*/
	$wp_customize->add_setting('SETTING_SiteInfo_NumberPhone', array(
        'default'       => '0902676026',
        'capability'    => 'edit_theme_options',
        'type'			=> 'text',
    ));
    $wp_customize->add_setting('SETTING_SiteInfo_Address', array(
        'default'       => '346 Bui Huu Nghia',
        'capability'    => 'edit_theme_options',
        'type'			=> 'text',
    ));
    $wp_customize->add_setting('SETTING_SiteInfo_Introduce', array(
        'default'       => 'abc',
        'capability'    => 'edit_theme_options',
        'type'			=> 'textarea',
    ));
    
    /*
	|--------------------------------------------------------------------------
	| COLOR PICKER
	|-------------------------------------------------------------------------- 
	*/
    $wp_customize->add_setting('SETTING_SiteColor_MenuNavi', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           	=> 'option',
    ));
}

function repoAddControlToSection($wp_customize){
	$wp_customize->add_control('CONTROL_SiteInfo_NumberPhone', array(
        'label'      => 'Số Điện Thoại',
        'section'    => 'SECTION_SiteInfo',
        'settings'   => 'SETTING_SiteInfo_NumberPhone',
    ));
    $wp_customize->add_control('CONTROL_SiteInfo_Address', array(
        'label'      => 'Địa Chỉ',
        'section'    => 'SECTION_SiteInfo',
        'settings'   => 'SETTING_SiteInfo_Address',
    ));
    $wp_customize->add_control('CONTROL_SiteInfo_Introduce', array(
        'label'      => 'Giới Thiệu',
        'section'    => 'SECTION_SiteInfo',
        'settings'   => 'SETTING_SiteInfo_Introduce',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'CONTROL_SiteInfo_Introduce', array(
        'label'      => 'Màu Menu',
        'section'    => 'SECTION_SiteColor',
        'settings'   => 'SETTING_SiteColor_MenuNavi',
    )));
}

?>