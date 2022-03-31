<?php
function hs_enqueue() {
    $uri=get_theme_file_uri();
    wp_register_style('hs_bootstrap',$uri.'/assets/css/bootstrap.min.css' );
    wp_register_style('hs_main',$uri.'/assets/css/main.css' );
    wp_register_style('hs_icons',$uri.'/assets/css/icons.min.css' );
    wp_register_style('hs_animation',$uri.'/assets/css/animation.min.css' );
    wp_register_style('hs_gallery',$uri.'/assets/css/gallery.min.css' );
    wp_register_style('hs_cookie-notice',$uri.'/assets/css/cookie-notice.min.css' );
    wp_register_style('hs_default',$uri.'/assets/css/default.css' );
    wp_register_style('hs_theme-orange',$uri.'/assets/css/theme-orange.css' );

    wp_enqueue_style ('hs_bootstrap');
    wp_enqueue_style ('hs_main');
    wp_enqueue_style ('hs_icons');
    wp_enqueue_style ('hs_animation');
    wp_enqueue_style ('hs_gallery');
    wp_enqueue_style ('hs_cookie-notice');
    wp_enqueue_style ('hs_default');
    wp_enqueue_style ('hs_theme-orange');

    //wp_register_script('hs_jquery', $uri.'/assets/js/jquery.min.js', [], false, true); 
    wp_register_script('hs_jquery-easing', $uri.'/assets/js/jquery.easing.min.js', [], false, true); 
    wp_register_script('hs_jquery-inview', $uri.'/assets/js/jquery.inview.min.js', [], false, true); 
    wp_register_script('hs_popper', $uri.'/assets/js/popper.min.js', [], false, true); 
    wp_register_script('hs_bootstrap', $uri.'/assets/js/bootstrap.min.js', [], false, true); 
    wp_register_script('hs_ponyfill', $uri.'/assets/js/ponyfill.min.js', [], false, true); 
    wp_register_script('hs_animation', $uri.'/assets/js/animation.min.js' , [], false, true); 
    wp_register_script('hs_progress', $uri.'/assets/js/progress-radial.min.js' , [], false, true); 
    wp_register_script('hs_bricklayer', $uri.'/assets/js/bricklayer.min.js' , [], false, true); 
    wp_register_script('hs_gallery', $uri.'/assets/js/gallery.min.js' , [], false, true); 
    wp_register_script('hs_shuffle', $uri.'/assets/js/shuffle.min.js' , [], false, true); 
    wp_register_script('hs_cookie', $uri.'/assets/js/cookie-notice.min.js' , [], false, true); 
    wp_register_script('hs_particles', $uri.'/assets/js/particles.min.js' , [], false, true); 
    wp_register_script('hs_main', $uri.'/assets/js/main.js', [], false, true); 


    wp_enqueue_script('jquery');
    wp_enqueue_script('hs_jquery-easing');
    wp_enqueue_script('hs_jquery-inview');
    wp_enqueue_script('hs_popper');
    wp_enqueue_script('hs_bootstrap');
    wp_enqueue_script('hs_ponyfill');
    wp_enqueue_script('hs_animation');
    wp_enqueue_script('hs_progress');
    wp_enqueue_script('hs_bricklayer');
    wp_enqueue_script('hs_gallery');
    wp_enqueue_script('hs_shuffle');
    wp_enqueue_script('hs_cookie');
    wp_enqueue_script('hs_particles');
    wp_enqueue_script('hs_main');
}


