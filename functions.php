<?php 
//Setup
//Includes
include (get_template_directory().'/includes/front/enqueue.php');
include (get_template_directory().'/includes/setup.php');
//Hooks
add_action('wp_enqueue_scripts', 'hs_enqueue');
add_action('after_setup_theme', 'hs_setup_theme');
//Shortcodes