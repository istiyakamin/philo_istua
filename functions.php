<?php 
define('VERSIONS', time());

function philo_istua_theme_setup(){

    load_theme_textdomain( "philo_istua" );
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-list'));
    add_theme_support('post-formats', array('image', 'audio', 'video', 'quote', 'link', 'gallery'));
    add_editor_style('/assets/css/editor-style.css');

	register_nav_menu( 'primary', __( 'Primary Menu', 'philo_istua' ) );
    
}
add_action('after_setup_theme', 'philo_istua_theme_setup');

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function philo_istua_enqueue_file() {
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('/assets/css/font-awesome/css/font-awesome.min.css'), null, '4.7.0' );
	wp_enqueue_style( 'font-css', get_theme_file_uri('/assets/css/fonts.css'), null, '4.7.0' );
	wp_enqueue_style( 'base-css', get_theme_file_uri('/assets/css/base.css'), null, '4.7.0' );
	wp_enqueue_style( 'vendor', get_theme_file_uri('/assets/css/vendor.css'), null, '4.7.0' );
	wp_enqueue_style( 'main-css', get_theme_file_uri('/assets/css/main.css'), null, '4.7.0');
	wp_enqueue_style( 'philo-css', get_stylesheet_uri(), null, VERSIONS);


	wp_enqueue_script('mordernizr-js', get_theme_file_uri('/assets/js/modernizr.js'), null, '1.0');
	wp_enqueue_script('pace-min-js', get_theme_file_uri('/assets/js/pace.min.js'), null, '1.0', false);
	wp_enqueue_script('plugins-js', get_theme_file_uri('/assets/js/plugins.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'philo_istua_enqueue_file' );


?>