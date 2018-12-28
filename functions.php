<?php 

function philo_istua_theme_setup(){

    load_theme_textdomain( "philo_istua" );
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-list'));
    add_theme_support('post-formats', array('image', 'audio', 'video', 'quote', 'link', 'gallery'));
    add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'philo_istua_theme_setup');

?>