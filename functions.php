<?php
/**
 * Custom Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom_Theme
 */

if ( ! function_exists( 'custom_theme_setup' ) ) :

	function custom_theme_setup() {

		load_theme_textdomain( 'custom-theme', get_template_directory() . '/languages' );


		add_theme_support( 'title-tag' );


		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'navbar-menu' => esc_html__( 'Primary', 'custom-theme' ),
		) );


		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'custom_theme_setup' );


function custom_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'custom_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'custom_theme_content_width', 0 );


/**
 * Widgets functions.
 */
require get_template_directory() . '/inc/widgets-functions.php';



/**
 * Enqueue scripts and styles.
 */
function custom_theme_scripts() {
	wp_deregister_script('jquery');
	// CSS
    wp_enqueue_style('custom-theme-style', get_template_directory_uri().'/css/main.css', array(), '1.0.0', 'all');
    // JS
	wp_enqueue_script('custom-theme-js', get_template_directory_uri().'/js/main.js',array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
