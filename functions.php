<?php

function add_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}

function add_scripts() {
    wp_enqueue_script('scripts', get_template_directory_uri().'/scripts.js');
}

add_action('wp_enqueue_scripts', 'add_style');
add_action('wp_enqueue_scripts', 'add_scripts');
?>