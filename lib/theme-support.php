<?php
function _themename_theme_support() {
add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-list', 'comment-form' , 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('custom-logo', array (
       'height'=>120,
        'width'=>300,
        'flex-width'=>true,
        'flex-height'=>true,
    ));
    add_theme_support('align-wide');
}
add_action ('after_setup_theme', '_themename_theme_support');