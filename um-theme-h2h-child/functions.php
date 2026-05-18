<?php
add_action( 'wp_enqueue_scripts', 'h2h_child_enqueue_styles' );
function h2h_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style(
        'h2h-um-branding',
        get_stylesheet_directory_uri() . '/h2h-um-branding.css',
        array( 'parent-style' ),
        '1.0.0'
    );

    wp_enqueue_style(
        'h2h-members',
        get_stylesheet_directory_uri() . '/h2h-members.css',
        array( 'parent-style', 'h2h-um-branding' ),
        '1.0.0'
    );
}
