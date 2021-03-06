<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
    <script src="https://use.typekit.net/edv8kcz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/greensock-js/src/minified/jquery.gsap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/greensock-js/src/minified/TweenLite.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/greensock-js/src/minified/TweenMax.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/greensock-js/src/minified/TimelineMax.min.js" type="text/javascript"></script>    
    <script src="<?php echo get_template_directory_uri(); ?>/js/greensock-js/src/minified/plugins/CSSPlugin.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/greensock-js/src/minified/easing/EasePack.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cycle2/jquery.cycle2.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cycle2/jquery.cycle2.js.map" type="text/javascript"></script>    
        
        
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/findShapeIndex.js" type="text/javascript"></script>    
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/init.js" type="text/javascript"></script>    
    
</head>

<body <?php body_class(); ?> <?php add_slug_body_class(); ?>>

    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <section id="branding" class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_final.svg" alt="tiBor" />
                </a>
                <!--<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
                <div id="site-description"><?php bloginfo( 'description' ); ?></div>-->
            </section>
            
            <nav id="main-menu" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                
                <nav id="social-menu">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/tibor.dujmovic" class="easeInOut"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://vimeo.com/tibord" class="easeInOut"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="http://www.linkedin.com/pub/tibor-dujmovic/58/901/721" class="easeInOut"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </nav>
                
                <!--<div id="search">
                    <?php get_search_form(); ?>
                </div>-->
                
            </nav>
            
        </header>
        
        <div id="container" class="wrapper">
            
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1110.5 743.6" style="enable-background:new 0 0 1110.5 743.6;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:url(#rect1_1_);}
                    .st1{fill:url(#rect2_1_);}
                    .st2{fill:url(#rect3_1_);}
                    .st3{fill:url(#rect4_1_);}
                    .st4{fill:url(#rect5_1_);}
                    .st5{fill:url(#rect6_1_);}
                </style>
                
                <linearGradient id="rect1_1_" gradientUnits="userSpaceOnUse" x1="622.9866" y1="175.584" x2="485.0781" y2="-63.2806" gradientTransform="matrix(3.2172 -1.1942 -1.1942 3.2172 -1407.5958 916.7816)">
                    <stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#2CA6B8;stop-opacity:0.1"/>
                </linearGradient>
                <polygon id="rect1" class="st0" points="615.6,507.5 379.5,743.6 0,364.2 236.1,128 "/>
                <linearGradient id="rect2_1_" gradientUnits="userSpaceOnUse" x1="680.6871" y1="169.1883" x2="545.5559" y2="-64.8659" gradientTransform="matrix(3.2172 -1.1942 -1.1942 3.2172 -1407.5958 916.7816)">
                    <stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#2CA6B8;stop-opacity:0.1"/>
                </linearGradient>
                <polygon id="rect2" class="st1" points="838.2,379.2 529.5,688 167.1,325.6 475.9,16.9 "/>
                <linearGradient id="rect3_1_" gradientUnits="userSpaceOnUse" x1="734.2469" y1="173.5974" x2="613.3989" y2="-35.7176" gradientTransform="matrix(3.2172 -1.1942 -1.1942 3.2172 -1407.5958 916.7816)">
                    <stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#60C2D3;stop-opacity:0.1"/>
                </linearGradient>
                <polygon id="rect3" class="st2" points="958.9,382.4 726.3,614.9 397,285.5 629.5,53 "/>
                <linearGradient id="rect4_1_" gradientUnits="userSpaceOnUse" x1="780.4857" y1="172.4776" x2="662.3228" y2="-32.1866" gradientTransform="matrix(3.2172 -1.1942 -1.1942 3.2172 -1407.5958 916.7816)">
                    <stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#2CA6B8;stop-opacity:0.3"/>
                </linearGradient>
                <polygon id="rect4" class="st3" points="1110.5,320.3 868.9,562 548.6,241.7 790.2,0 "/>
                <linearGradient id="rect5_1_" gradientUnits="userSpaceOnUse" x1="671.8156" y1="138.7975" x2="538.9824" y2="-91.2761" gradientTransform="matrix(3.2172 -1.1942 -1.1942 3.2172 -1407.5958 916.7816)">
                    <stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#60C2D3;stop-opacity:0.3"/>
                </linearGradient>
                <polygon id="rect5" class="st4" points="731.2,437.9 679.4,489.7 292.3,102.6 344.1,50.9 "/>
                <linearGradient id="rect6_1_" gradientUnits="userSpaceOnUse" x1="641.1926" y1="178.2033" x2="503.3833" y2="-60.4894" gradientTransform="matrix(3.2172 -1.1942 -1.1942 3.2172 -1407.5958 916.7816)">
                    <stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#60C2D3;stop-opacity:0.3"/>
                </linearGradient>
                <polygon id="rect6" class="st5" points="657,512.1 452.6,716.5 69.6,333.4 274,129 "/>
            </svg>