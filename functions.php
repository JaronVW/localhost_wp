<?php

function load_stylesheets()
{

    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('style',get_template_directory_uri() . '/style.css', array(), false, 'all' );
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');




function loadJs(){

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery_3.5.1.js' , '' , 1 , true );
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js' , '' , 1 , true );
    wp_enqueue_script('bootstrapJs');

    wp_register_script('customjs', get_template_directory_uri() . '/js/custom/scripts.js' , '' , 1 , true );
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadJs');