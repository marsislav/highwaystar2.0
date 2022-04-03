<?php
function _themename_customize_register($wp_customize) {
$wp_customize->get_setting('blogname')->transport='postMessage';
    $wp_customize->add_section('_themename_footer_options', array (
        'title'=>esc_html__('Footer options', '_themename'),
        'description'=>esc_html__('You can change footer options from here', '_themename'),
        'priority'=>30
    ));

$wp_customize->add_setting('_themename_site_info', array (
    'default'=>'',
    'sanitize_callback'=>'_themename_sanitize_site_info',
    'transport'=>'postMessage'
    ));
$wp_customize->add_control('_themename_site_info', array (
    'type'=>'text',
    'label'=>esc_html__('Site info','_themename'),
    'section'=>'_themename_footer_options'

));
}
add_action('customize_register', '_themename_customize_register');

function _themename_sanitize_site_info ($input) {
    $allowed=array(
     'a'=>array(
         'href'=>array(),
         'title'=>array(),
         'target'=>array()
     )
    );
    return wp_kses($input, $allowed);
}