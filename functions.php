<?php

function realty_css()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style('templatemo', get_template_directory_uri() . '/assets/css/templatemo-hexashop.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '6.4.2');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css');
}
add_action('wp_enqueue_scripts', 'realty_css');

function realty_scripts()
{
    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . '/assets/js/jquery-2.1.0.min.js',
        array(),
        wp_get_theme()->get('Version'),
        false       
    );

    wp_enqueue_script(
        'popper',
        get_template_directory_uri() . '/assets/js/popper.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'carousel',
        get_template_directory_uri() . '/assets/js/owl-carousel.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'accordions',
        get_template_directory_uri() . '/assets/js/accordions.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'datepicker',
        get_template_directory_uri() . '/assets/js/datepicker.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'scrollreveal',
        get_template_directory_uri() . '/assets/js/scrollreveal.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'waypoints',
        get_template_directory_uri() . '/assets/js/waypoints.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'counterup',
        get_template_directory_uri() . '/assets/js/jquery.counterup.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'imgfix',
        get_template_directory_uri() . '/assets/js/imgfix.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . '/assets/js/slick.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'lightbox',
        get_template_directory_uri() . '/assets/js/lightbox.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/assets/js/isotope.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_register_script(
        'custom',
        get_template_directory_uri() . '/assets/js/custom.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_add_inline_script('custom', 'var template_url = "' . get_template_directory_uri() . '";');

    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'realty_scripts');
