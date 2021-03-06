<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php seo_title(); ?></title>
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!--    <meta name="theme-color" content="#00bcb0">-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-hash="<?php wpa_fontbase64(true); ?>" data-a="<?php echo admin_url('admin-ajax.php'); ?>">
<div id="main">
    <header>



        <nav class="main-menu">
            <div class="menu-burger"></div>
            <div class="container">
                <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location' => 'main_menu')); ?>
                <nav class="mobile-main-menu">
                    <?php wp_nav_menu( array( 'container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location' => 'main_menu' ) ); ?>
                </nav>
            </div>
        </nav>
            <div class="logo-block">
                <div class="container">
                   <?php echo get_custom_logo(); ?>
                </div>
            </div>

<!--        <div class="container">-->
<!--            --><?php //echo get_custom_logo(); ?>



<!--        </div>-->
    </header>
