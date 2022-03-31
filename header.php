<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>Highway Star 2.0</title>

        <meta name="description" content="Creative Agency, Portfolio, Corporate, Startup &amp; Technology">
        <meta name="subject" content="Creative Agency, Portfolio, Corporate, Startup &amp; Technology">
        <meta name="author" content="Codings">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="#.ico">
        <link rel="apple-touch-icon" href="#.png">
        <link rel="apple-touch-icon" sizes="72x72" href="#.png">
        <link rel="apple-touch-icon" sizes="114x114" href="#.png">
        
        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {               
                --header-bg-color: #040402;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #040402;

                --section-1-bg-color: #111111;
                --section-2-bg-color: #191919;
                --section-3-bg-color: #040402;
                --section-4-bg-color: #111111;
                --section-5-bg-color: #191919;
                --section-6-bg-color: #040402;
                --section-7-bg-color: #111111;
            
                --footer-bg-color: #191919;
            }
        </style>
        <?php wp_head();?>
    </head>
    

    <body <?php body_class();?>  data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

        <!-- Header -->
        <header id="header">

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand aos-init aos-animate">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="#">
                        Leverage<i class="version-number">2.1</i>
                        <!-- 
                            Custom Logo
                            <img src="assets/images/logo.svg" alt="#">
                        -->
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    
                    <ul class="navbar-nav items">


                    <?php 
                    if (has_nav_menu('primary')) {
                        wp_nav_menu([
                            'theme_location'=>'primary',
                            'container'=>false,
                            'mennu_class'=>'nav-items',
                            'fallback_cb'=>false,
                            'depth'=>1


                        ]);
                    } ?>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
                        </li>
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="#" target="_blank" class="btn ml-lg-auto dark-button"><i class="icon-rocket"></i>CONTACT US</a>
                            <!-- 
                                Suggestion: Replace the purchase button above with a contact button.
                                
                                <a href="#contact" class="smooth-anchor btn ml-lg-auto dark-button"><i class="icon-rocket"></i>CONTACT US</a>
                            -->
                        </li>
                    </ul>
                </div>
            </nav>

        </header>