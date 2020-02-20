<?php

 add_action(  'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles(){
    wp_enqueue_style( 'parent-style',get_stylesheet_directory_uri() .'/style.css');
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script.js', array(), '1.0.0', true);
    wp_enqueue_style( 'load-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'slick-min', get_stylesheet_directory_uri() . '/slick/slick.css' );
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/slick/slick-theme.css' );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/script.js' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/masonry/masonry.pkgd.min.js' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/counter/js/counter.js' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/animateText/animate.min.css' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/flati/css/flati.min.css' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/counter/js/counter.js' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/counter/js/counter.js' );
    
    wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
);
}

    

?>