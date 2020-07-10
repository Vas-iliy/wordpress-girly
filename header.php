<!DOCTYPE html>
<html lang="en-US">

<? wp_head(); ?>

<body class="size-1280">
<!-- PREMIUM FEATURES BUTTON -->
<a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="../assets/img/premium-features.png" alt=""></a>
<!-- HEADER -->
<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="top-nav">
            <!-- mobile version logo -->
            <!-- left menu items -->
            <div class="top-nav left-menu">
                <? wp_nav_menu( [
                    'theme_location'  => 'head',
                    'container'       => false,
                ] ); ?>
            </div>

            <!-- logo -->
            <ul class="logo-menu">
                <a href="<?=home_url() ?>" class="logo">
                    <!-- Logo White Version -->
                    <img class="logo-white" src="<?=get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
                    <!-- Logo Dark Version -->
                    <img class="logo-dark" src="<?=get_template_directory_uri() ?>/assets/img/logo-dark.svg" alt="">
                </a>
            </ul>

            <!-- right menu items -->
            <div class="top-nav right-menu">
                <? wp_nav_menu( [
                    'theme_location'  => 'headRight',
                    'container'       => false,
                ] ); ?>
            </div>
           <!-- <div class="top-nav right-menu">
                <ul class="top-ul chevron">
                    <li>
                        <a>Products</a>
                        <ul>
                            <li><a>Product 1</a></li>
                            <li><a>Product 2</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>-->
        </div>
    </nav>
</header>