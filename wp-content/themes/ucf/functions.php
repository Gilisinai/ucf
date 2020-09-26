<?php

function ucf_files() {
    wp_enqueue_script('main-script', get_theme_file_uri('/js/script.js'), NULL,'1.0', true);
    wp_enqueue_style('ucf_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'ucf_files');


?>