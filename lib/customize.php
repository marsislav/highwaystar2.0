<?php
function _themename_customize_register($wp_customize) {
$wp_customize->get_setting('blogname')->transport='postMessage';

$wp_customize->selective_refresh->add_partial('blogname', array (
    //'settings'=>array('blogname')
    'selector'=>'.logo',
    'container_inclusive'=>false,
    'render_callback'=>function () {
        bloginfo('name');
    }
));
/*General settings*/

    $wp_customize->add_section('_themename_general_options', array (
        'title'=>esc_html__('General options', '_themename'),
        'description'=>esc_html__('You can change general options from here', '_themename')
    ));

    $wp_customize->add_setting('_themename_accent_colour', array (
        'default'=>'#20ddae',
        'sanitize_callback'=>'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '_themename_accent_colour', array (
        'label'=>__('Accent color', '_themename'),
        'section'=>'_themename_general_options',
    )));


    /*Footer settings*/
    $wp_customize->selective_refresh->add_partial('$_themename_footer_partial', array (
        'settings'=>array('_themename_site_info', '_themename_footer_bg', '_themename_footer_layout' ),
        'selector'=>'footer',
        'container_inclusive'=>false,
        'render_callback'=>function () {
            get_template_part('template-parts/footer/info');
            get_template_part('template-parts/footer/widgets');
        }
    ));


    $wp_customize->add_section('_themename_footer_options', array (
        'title'=>esc_html__('Footer options', '_themename'),
        'description'=>esc_html__('You can change footer options from here', '_themename'),
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

$wp_customize->add_setting('_themename_footer_bg', array (
    'default'=>'dark',
    'transport'=>'postMessage',
    'sanitize_callback'=>'_themename_sanitize_footer_bg'
    ));

    $wp_customize->add_control('_themename_footer_bg', array(
        'type'=>'select',
        'label'=>esc_html__('Footer background', '_themename'),
        'choices'=>array(
            'light'=>esc_html__('Light','_themename'),
            'dark'=>esc_html__('Dark','_themename'),
        ),
        'section'=>'_themename_footer_options'

    ));
    //Footer widgets columns

    $wp_customize->add_setting('_themename_footer_layout', array (
        'default'=>'3,3,3,3',
        'transport'=>'postMessage',
        'sanitize_callback'=>'sanitize_text_field',
        'validate_vallback'=>'_themename_validate_footer_layout'
    ));

    $wp_customize->add_control('_themename_footer_layout', array (
        'type'=>'text',
        'label'=>esc_html__('Footer layout','_themename'),
        'section'=>'_themename_footer_options'

    ));

    //End of columns

}
add_action('customize_register', '_themename_customize_register');

function _themename_validate_footer_layout ($validity, $value) {
 if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
     $validity->add('invalid_footer_layout', esc_html__( 'Footer layout is invalid', '_themename' ));
 }
    return $validity;
}

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
function _themename_sanitize_footer_bg ($input) {
    $valid=array('light', 'dark');
    if (in_array($input, $valid, true)) {
        return $input;
    }
    return 'dark';
}