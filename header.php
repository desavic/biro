<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo( 'name' ); ?> </title>
        <meta name="description" content="<?php bloginfo('description') ?> ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>

        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body >
        <div class="container">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="S">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <div class="header-container">
                <header class="header wrapper">
                    <div class="img-holder">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?> ">
                            <img src="<?php
                            $default_image = get_template_directory_uri() . '/img/img_Biro-100x50.png "></a>';
                            if (function_exists('the_custom_logo')) {
                                // if (!has_custom_logo()){
                                //     echo $default_image ;
                                // } else {
                                    the_custom_logo();
                                }
                            // } else {
                            //     echo $customimage ;
                            // }
 ?>
                    </div>
                    <nav>
                        <?php wp_nav_menu( array(
                            'theme_location'    => 'header_navigation',
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav navbar-right',
                        ) ); ?>
                    </nav>
                </header>
            </div>
            <div class="main-container wrapper ">
