<?php
function hs_assets () {
    wp_enqueue_style('hs_stylesheed', get_template_directory_uri().'/dist/assets/css/bundle.css', array(), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'hs_assets');

function hs_admin_assets () {
    wp_enqueue_style('hs_admin-stylesheed', get_template_directory_uri().'/dist/assets/css/admin.css', array(), '1.0', 'all' );
}
add_action('admin_enqueue_scripts', 'hs_admin-assets');