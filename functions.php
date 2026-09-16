<?php
/**
 * hhp functions and definitions
 *
 * @package hhp
 */

function hhp_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'search-form',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'hhp_setup' );

function hhp_editor_style() {
	add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'hhp_editor_style' );

function hhp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'hhp' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'hhp_widgets_init' );

function hhp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'hhp_pingback_header' );

function hhp_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'hhp-screen', get_template_directory_uri() . '/assets/css/screen.css', array( 'bootstrap' ), '4.0' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array( 'jquery' ), '3.4.1', true );
    wp_enqueue_script( 'hhp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), null, true );
    wp_enqueue_script( 'hhp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'hhp_scripts' );

require get_theme_file_path( '/inc/template-tags.php' );
require get_theme_file_path( '/inc/extras.php' );
require get_theme_file_path( '/inc/customizer.php' );
require get_theme_file_path( '/inc/jetpack.php' );
