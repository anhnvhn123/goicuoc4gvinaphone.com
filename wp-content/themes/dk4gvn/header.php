<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage dk4gvn
 * @since Twenty Fifteen 1.0
 */

?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" id="minhdd-fontawesome-css" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php echo get_template_directory_uri() . '/js/jquery-2.2.1.min.js' ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/bootstrap.min.js' ?>"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124404918-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-124404918-2');
    </script>
    <style>
        @media (min-width: 320px) and (max-width: 991px) {
            .navbar-brand>img {
                width: 170px
            }

            .nav.navbar-nav.menu {
                text-align: left;
                 !important
            }

            #main_menu ul li .sub-menu {
                margin-right: -20px !important;
                position: absolute;
                right: 10%;
            }
        }

        .navbar-brand {
            height: auto;
        }

        .header.navbar {
            background: #fbfbfc !important
        }

        .navbar-toggle {
            margin-top: 30px;
        }

        .breadcrumb {
            margin-bottom: 0;
            margin-top: 33px;
        }

        #main_menu ul li {
            display: block !important;
            text-align: right;
            /*        margin-left: 130px;*/
        }

        .navbar-nav {
            margin: 0;
        }

        footer .navbar-nav {
            margin: 0 15px !important;
        }

        #main_menu .sub-menu {
            min-width: 150px;
            width: 180px;
        }

        #main_menu .sub-menu li {
            width: 100%;
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            padding: 0 10px !important;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <header id="header" class="header navbar navbar-default">
            <div class="container ">
                <div class="row text-left">
                    <div class="col-md-2 navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>
                        <a href="<?php echo get_home_url()?>" class="navbar-brand"><img src="<?= $image[0]; ?>" alt="brand"></a>
                    </div>
                    <div class="col-md-10 collapse navbar-collapse text-left" id="main_menu">
                        <div class="nav navbar-nav">
                            <?php if ( has_nav_menu( 'main-menu' ) || has_nav_menu( 'social' ) ) : ?>
                            <?php if ( has_nav_menu( 'main-menu' ) ) : ?>
                            <?php
                                    wp_nav_menu( array( 'theme_location'=> 'main-menu', 'menu_id' => 'menu-main-menu', 'menu_class'=> 'nav navbar-nav menu') );
                                    ?>
                            </nav><!-- .main-navigation -->
                            <?php endif; ?>
                            <?php if ( has_nav_menu( 'social' ) ) : ?>

                            <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'social',
                                        'menu_class'     => 'social-links-menu',
                                        'depth'          => 1,
                                        'link_before'    => '<span class="screen-reader-text">',
                                        'link_after'     => '</span>',
                                    ) );
                                    ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobifone-line"></div>