<?php

function addStyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}

function addScripts() {
    wp_enqueue_script('scripts', get_template_directory_uri().'/scripts.js');
}

add_action('wp_enqueue_scripts', 'addStyle');
add_action('wp_enqueue_scripts', 'addScripts');
?>