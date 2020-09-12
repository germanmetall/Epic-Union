<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Epic Unio">
        <meta name="author" content="Herman Mossur">
        <title>Epic Union</title>
        <link rel="icon" 
            type="image/png" 
            href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
        <style>
            .desktop #page1{
                background-image: url("<?php echo get_bloginfo('template_directory'); ?>/images/bgDesktop.png");
            }
            .mobile #page1{
                background-image: url("<?php echo get_bloginfo('template_directory'); ?>/images/bgMobile.png");
            }
        </style>
        <?php wp_head();?>
    </head>
    <body>
        <header class="header">
            <div class="desktop">
                <navbar class="navbar">
                    <span class="navbar__link navbar__link--logo">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png"/>
                    </span>
                    <span class="navbar__link"><?php echo get_theme_mod( 'navbar1_text' ); ?></span>
                    <span class="navbar__link"><?php echo get_theme_mod( 'navbar2_text' ); ?></span>
                    <span class="navbar__link"><?php echo get_theme_mod( 'navbar3_text' ); ?></span>
                    <span class="navbar__link"><?php echo get_theme_mod( 'navbar4_text' ); ?></span> 
                </navbar>
            </div>
            <div class="mobile">
                <navbar class="navbar mobile">
                    <span class="heading1">Epic Union</span>
                </navbar>
            </div>
        </header>