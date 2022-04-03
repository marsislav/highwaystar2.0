<!DOCTYPE html>
<html <?php language_attributes();?> 
<head>    
    <!-- Standard Meta -->
    <meta charset="<?php bloginfo ('charset')?>">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fda924"/> 
    <!-- Site Properties -->    
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
</head>

<body <?php body_class();?>>
    <header role="role">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name'));?></a>
                </div>
                <?php get_search_form(true);?>
            </div>
        </div>
    </div>
        
    </header>
<div id="content">