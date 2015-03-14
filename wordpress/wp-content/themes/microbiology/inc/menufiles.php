<?php

function microbiology_theme_menus(){
 
 register_nav_menus(array(
 
     'main_menu' => 'Main Menu'
    
 
 
 ));
     register_nav_menus(array(
 
     'right_menu' => 'right Menu'
    
 
 
 ));
 }
     add_action('init','microbiology_theme_menus');
 
   function microbiology_fallback_leftmenu(){
   
     echo '<ul class = "cssmenu">';
       
       
     if ('page' != get_option('show_on_front')) {
        echo '<li><a href="'. site_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
        echo '</ul>';

     
   
}
