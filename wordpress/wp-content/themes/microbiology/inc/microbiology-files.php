<?php
function register_style(){
    wp_register_style('bootstrap',get_template_directory_uri() .'/css/bootstrap.min.css',array(),'3.1.0','all');
    wp_register_style('font-awesome',get_template_directory_uri() .'/css/font-awesome.min.css',array(),'3.1.0','all');
    wp_register_style('stylesheet',get_template_directory_uri() .'/style.css',array(),'3.1.0','all');
    wp_register_style('bar',get_template_directory_uri() .'/css/bar/bar.css',array(),'3.1.0','all');
    wp_register_style('dark',get_template_directory_uri() .'/css/dark/dark.css',array(),'3.1.0','all');
    wp_register_style('default',get_template_directory_uri() .'/css/default/default.css',array(),'3.1.0','all');
    wp_register_style('light',get_template_directory_uri() .'/css/light/light.css',array(),'3.1.0','all');
    wp_register_style('nivo-slider',get_template_directory_uri() .'/css/nivo-slider.css',array(),'3.1.0','all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bar');
    wp_enqueue_style('dark');
    wp_enqueue_style('default');
    wp_enqueue_style('light');
    wp_enqueue_style('nivo-slider');
    
    



}
add_action('wp_enqueue_scripts','register_style');


