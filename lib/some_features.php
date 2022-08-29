<?php


#theme supoorts & register menu

function some_features(){
    add_theme_support( 'align-wide' );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', 
        array(
            'width' => 70,
            'height' => 15,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => esc_attr__( 'Gray', 'themeLangDomain' ),
            'slug'  => 'Gray',
            'color' => '#434448',
        ),
        array(
            'name'  => esc_attr__( 'Black', 'themeLangDomain' ),
            'slug'  => 'Black',
            'color' => '#000000',
        ),
        array(
            'name'  => esc_attr__( 'Gold', 'themeLangDomain' ),
            'slug'  => 'Gold',
            'color' => '#C3A573',
        ),
        array(
            'name'  => esc_attr__( 'Red', 'themeLangDomain' ),
            'slug'  => 'Red',
            'color' => '#F55050',
        ),
        array(
            'name'  => esc_attr__( 'White', 'themeLangDomain' ),
            'slug'  => 'White',
            'color' => '#ffffff',
        ),
    ) );	
    // add_theme_support( 'wp-block-styles' );

    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
}
 
add_action('after_setup_theme', 'some_features');


#register sidebar

function pride_add_sidebar(){
    register_sidebar(
        array(
            'name' => 'Footer-widget',
            'id' => 'footer-widget',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
}
 
add_action('widgets_init', 'pride_add_sidebar');


#do-action test function

function action_test_function (){
    echo "<h2 style='color: black;'>HI, I'm a do_action Test function</h2>";
}

add_action('action_test', 'action_test_function');