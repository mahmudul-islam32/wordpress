<?php 
function microbiology_widgets(){
 register_sidebar (array(
'name' => __('Left Footer','microbiology'),
'id' => "footer-left-widget-area",
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>' )
);
        
    



}
add_action('init','microbiology_widgets');
