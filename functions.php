<?php

//Cuando el tema es activado

function colchones_setup() {
    //Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // Agregar imagenes de tamaños peresonalizadas
    add_image_size('square' , 350, 350, true);
    add_image_size('portrait' , 350, 724, true);
    add_image_size('cajas' , 400, 375, true);
    add_image_size('mediano' , 700, 400, true);
    add_image_size('blog' , 966, 644, true);
}

add_action( 'after_setup_theme', 'colchones_setup' );
// Menus de navegación, agregar mas utilizando el arreglo
function colchones_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal')
    ));
}

add_action('init', 'colchones_menus');

// Scripts y styles
function colchones_wp_styles_scripts()
{
    wp_enqueue_style('normalize', get_template_directory_uri() .  '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

    wp_enqueue_style('homepage', get_template_directory_uri() . '/css/homepage.css', array(), '1.0.0');

    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway:wght@300&family=Staatliches&display=swap', array(), '1.0.0');

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont', 'slicknavCSS','homepage'), '1.0.0');

    wp_enqueue_script('slicknavJS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'colchones_wp_styles_scripts');

