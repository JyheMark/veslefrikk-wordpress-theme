<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
        <title>Veslefrikk <?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body onload="onLoad()">
        <nav class="nav-container" id="nav-container">
            <a href="<?php echo home_url(); ?>" class="home-logo"><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>"/></a>
            <div>
                <a href="tel:+4745293408">(+47) 452 93 408</a>
                <?php wp_nav_menu(); ?>
            </div>
        </nav>
        <header>
            <div class="hero-image" style="background-image: url(<?php echo get_field('hero_image')?get_field('hero_image'):wp_get_attachment_image_url(47, 'full'); ?>)"></div>
            <div class="container">
                <div class="page-title-container">
                    <div>
                        <h1><?php echo get_field('heading')?get_field('heading'):get_the_title(); ?></h1>
                        <h3><?php echo get_field('sub_heading')?get_field('sub_heading'):''?></h3>
                    </div>
                </div>
            </div>    
        </header>
