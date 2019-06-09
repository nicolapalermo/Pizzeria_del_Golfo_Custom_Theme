<?php

/**
 * Register widget area.
 */
add_action( 'widgets_init', 'custom_theme_widgets_init' );
    function custom_theme_widgets_init() {
        register_sidebar( array(
            'name'          => esc_html__( 'Front Page - Prima Sezione', 'custom-theme' ),
            'id'            => 'frontpage-primasezione',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Front Page - Seconda Sezione', 'custom-theme' ),
            'id'            => 'frontpage-secondasezione',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="widget-title title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Front Page - Terza Sezione', 'custom-theme' ),
            'id'            => 'frontpage-terzasezione',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="widget-title title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar', 'custom-theme' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 1', 'custom-theme' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 2', 'custom-theme' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 3', 'custom-theme' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Policy Menu', 'custom-theme' ),
            'id'            => 'policy-menu',
            'description'   => esc_html__( 'Add widgets here.', 'custom-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
