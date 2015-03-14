<?php

include_once('inc/microbiology-files.php');
//menu
include_once('inc/menufiles.php');
//default-support
include_once('inc/defaultsupports.php');

//widgets
include_once('inc/widgets.php');
include_once('inc/custom-post.php');

//custom-post
 function nivo_micro(){
 wp_enqueue_script('jquery');
 wp_enqueue_script( 'nivo-main-file', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array('jquery') );     
 wp_enqueue_script( 'nivo-active', get_template_directory_uri() . '/js/nivo-active.js', array('jquery') );     
     
 
 }
add_action('wp_enqueue_scripts','nivo_micro');

function nivo_slider_loop($atts, $content =null){
   extract ( shortcode_atts( array (
  
    'theme'=>'default',
       
   
   
   
   ),$atts,'slider'));
    
    return '<div class="slider-wrapper theme ' .$theme.'"><div id="slider" class="nivoslider">'. do_shortcode($content).'</div><div>';
                           


}
add_shortcode('slider','nivo_slider_loop');


 function nivo_slides_loop($atts){
   extract ( shortcode_atts( array (
   'content' =>'null',
    'image'=>'null',
    'title'=>'default',
    'link'=>'http://',
       
   
    
   
   ),$atts,'slides'));
    
    return '<a href="'.$link.'"><img src="'.$image.'" alt="" title="'.$title.'"/></a>';
                           


}
add_shortcode('slider','nivo_slides_loop');
 
