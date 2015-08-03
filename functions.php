<?php

function theme_styles() {
    wp_enqueue_style('foundation.css', get_template_directory_uri() . '/components/foundation/css/foundation.css');
    wp_enqueue_style('style.css', get_template_directory_uri() . 'style.css');
    wp_enqueue_style('wp_core.css', get_template_directory_uri() . 'wp_core.css');
}

add_action('wp_enqueue_scripts', 'theme_styles' );

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu'   => __('Header Menu')
        )
    );
}
add_action('init', 'register_theme_menus');

function create_widget( $name, $id, $description ) {
    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

?>
