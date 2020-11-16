<?php
defined('ABSPATH') || exit;

function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/assets/css/app.css' );
}

function scrips_theme(){
    wp_enqueue_script('vendors', get_template_directory_uri() . '/dist/assets/js/vendors.js',['jquery'],null, true);
    wp_enqueue_script('index', get_template_directory_uri() . '/dist/assets/js/app.js',['jquery'],null, true);
}

add_action( 'wp_enqueue_scripts', 'style_theme');
add_action( 'wp_enqueue_scripts', 'scrips_theme');

require get_template_directory().'/inc/init-tgm.php';

include "inc/acf.php";