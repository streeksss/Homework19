<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>



    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="h-page">
        <div class="container clearfix">
            <div class="logo"><a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Deliver"/></a></div>
            <div class="social-block">
                <div class="social-icon fr"><a href="http://twitter.com"><img class="social" src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="Twitter"/></a></div>
                <div class="social-icon sec"><a href="http://facebook.com"><img class="social" src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="Facebook"/></a></div>
                <div class="social-icon"><a href="#"><img class="social" src="<?php bloginfo('template_directory'); ?>/img/rss.png" alt="RSS"/></a></div>
            </div>
            <div class="line"></div>
            <nav class="menu">
                <?php
                $args = array(
                    'theme_location' => 'header'
                );
                ?>

                <?php wp_nav_menu($args); ?>
            </nav>
        </div>
    </header>