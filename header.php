<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>Veslefrikk <?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
    <section class="header" style="background-image: url(<?php echo get_field('hero_image')?get_field('hero_image'):wp_get_attachment_image_url(21, 'full'); ?>)">
        <div class="container">
            <nav>
                <a href="<?php echo home_url(); ?>" class="home-logo">Veslefrikk Teaterverksted</a>
                <?php 
                    wp_nav_menu();
                ?>
            </nav>
            <div class="page-title-container">
                <div>
                    <h1><?php echo get_field('heading')?get_field('heading'):get_the_title(); ?></h1>
                    <h3><?php echo get_field('sub_heading')?get_field('sub_heading'):''?></h3>
                </div>
            </div>
        </div>
    </section>