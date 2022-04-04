<?php
function _themename_sidebar_widgets() {
register_sidebar(array (
    'id'=>'primary-sidebar',
    'name'=>esc_html__('Primary sidebar', '_themename'),
    'description'=>esc_html__('This sidebar appears in the blog post page', '_themename'),
    'before_widget'=>'<section id="%1$s" class="sidebar-widget %2$s" >',
    'after_widget'=>'</section>',
    'before_title'=>'<h5>',
    'after_title'=>'</h5>'
));
}
$footer_layout=sanitize_text_field(get_theme_mod('_themename_footer_layout', '3,3,3,3'));
$footer_layout=preg_replace('/\s+/','', $footer_layout);
$columns=explode(',', $footer_layout);
$footer_bg=_themename_sanitize_footer_bg(get_theme_mod('_themename_footer_bg','dark'));
$widget_theme='';
if ($footer_bg=='light') {
    $widget_theme='footer-widget-dark';
}
else {
    $widget_theme='footer-widget-light';
}

foreach ($columns as $i => $column) {
    register_sidebar( array (
        'id'=>'footer-sidebar-'.($i+1),
        'name'=>sprintf(esc_html__('Footer column %s', '_themename'), $i+1),
        'description'=>esc_html__('Footer widgets', '_themename'),
        'before_widget'=>'<section id="%1$s" class="footer-widget '. $widget_theme .' %2$s" >',
        'after_widget'=>'</section>',
        'before_title'=>'<h5>',
        'after_title'=>'</h5>'
    ));
}
add_action('widgets_init', '_themename_sidebar_widgets');