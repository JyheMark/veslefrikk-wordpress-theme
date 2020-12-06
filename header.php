<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Teaterskole for barn og ungdom i Halden"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
        <title>Veslefrikk <?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body onload="onLoad()">
        <nav class="nav-container" id="nav-container">
            <a href="<?php echo home_url(); ?>" class="home-logo"><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>"/></a>
            <div class="standard-menu">
                <a href="tel:+4745293408">(+47) 452 93 408</a>
                <?php wp_nav_menu(); ?>
            </div>
            <div class="mobile-menu-button" onclick="toggleMobileMenu()">
                <svg 
                    aria-hidden="true" 
                    focusable="false" 
                    data-prefix="fas" 
                    data-icon="bars" 
                    class="svg-inline--fa fa-bars fa-w-14" 
                    role="img" 
                    xmlns="http://www.w3.org/2000/svg" 
                    viewBox="0 0 448 512"
                >
                    <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                </svg>
            </div>
            <div id="mobile-menu" class="mobile-menu">
                <?php wp_nav_menu(); ?>
            </div>
        </nav>
        <header>
            <div class="hero-image" style="background-image: url(<?php echo get_field('hero_image')?get_field('hero_image'):get_template_directory_uri().'/images/default-hero.jpg'; ?>)">
                <div class="container">
                    <h1 class="row text-centered"><?php 
                        echo !is_singular('post')?(get_field('heading')?get_field('heading'):get_the_title()):'Nyheter'; 
                    ?></h1>
                </div> 
            </div>             
        </header>
